<?php

namespace App\Exports;

use App\Models\SubscriptionReport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Carbon\Carbon;

class CreditReportExport implements FromCollection, WithHeadings, WithMapping, WithChunkReading, WithCustomChunkSize
{
    use RemembersRowNumber;

    protected $startDate;
    protected $endDate;

    public function __construct($startDate = null, $endDate = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * Genera una colección plana con todas las filas expandidas
     * Usa chunking para optimizar memoria
     */
    public function collection()
    {
        $query = SubscriptionReport::query()
            ->with([
                'subscription:id,full_name,document,email,phone',
                'loans',
                'otherDebts',
                'creditCards'
            ]);
    
        if ($this->startDate) {
            $query->whereDate('created_at', '>=', $this->startDate);
        }
    
        if ($this->endDate) {
            $query->whereDate('created_at', '<=', $this->endDate);
        }
    
        $allRows = collect();
    
        $query->orderBy('id')->chunkById($this->chunkSize(), function ($reports) use (&$allRows) {
            foreach ($reports as $report) {
                $subscription = $report->subscription;
    
                $createdAt = $report->created_at ? Carbon::parse($report->created_at)->format('Y-m-d H:i:s') : '';
    
                $baseInfo = [
                    'report_id'  => $report->id,
                    'full_name'  => $subscription->full_name ?? '',
                    'document'   => $subscription->document ?? '',
                    'email'      => $subscription->email ?? '',
                    'phone'      => $subscription->phone ?? '',
                    'created_at' => $createdAt,
                ];
    
                foreach ($report->loans as $loan) {
                    $allRows->push([
                        'data' => array_merge($baseInfo, [
                            'company'    => $loan->bank,
                            'debt_type'  => 'Préstamo',
                            'situation'  => $loan->status,
                            'days'       => $loan->expiration_days,
                            'entity'     => $loan->bank,
                            'amount'     => $loan->amount,
                            'line_total' => '',
                            'line_used'  => '',
                            'status'     => $this->getEstado($loan->status, $loan->expiration_days),
                        ]),
                    ]);
                }
    
                foreach ($report->otherDebts as $debt) {
                    $allRows->push([
                        'data' => array_merge($baseInfo, [
                            'company'    => $debt->entity,
                            'debt_type'  => 'Otra deuda',
                            'situation'  => '-',
                            'days'       => $debt->expiration_days,
                            'entity'     => $debt->entity,
                            'amount'     => $debt->amount,
                            'line_total' => '',
                            'line_used'  => '',
                            'status'     => $this->getEstado(null, $debt->expiration_days),
                        ]),
                    ]);
                }
    
                foreach ($report->creditCards as $card) {
                    $allRows->push([
                        'data' => array_merge($baseInfo, [
                            'company'    => $card->bank,
                            'debt_type'  => 'Tarjeta de crédito',
                            'situation'  => '-',
                            'days'       => 0,
                            'entity'     => $card->bank,
                            'amount'     => $card->used,
                            'line_total' => $card->line,
                            'line_used'  => $card->used,
                            'status'     => 'Activa',
                        ]),
                    ]);
                }
    
                if ($report->loans->isEmpty() && $report->otherDebts->isEmpty() && $report->creditCards->isEmpty()) {
                    $allRows->push([
                        'data' => array_merge($baseInfo, [
                            'company'    => '',
                            'debt_type'  => 'Sin deudas',
                            'situation'  => '',
                            'days'       => '',
                            'entity'     => '',
                            'amount'     => '',
                            'line_total' => '',
                            'line_used'  => '',
                            'status'     => 'Sin información',
                        ]),
                    ]);
                }
            }
    
            unset($reports);
        });
    
        return $allRows;
    }
    

    /**
     * Encabezados del Excel
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nombre Completo',
            'DNI',
            'Email',
            'Teléfono',
            'Compañía',
            'Tipo de deuda',
            'Situación',
            'Atraso',
            'Entidad',
            'Monto total',
            'Línea total',
            'Línea usada',
            'Reporte subido el',
            'Estado',
        ];
    }

    /**
     * Mapeo de cada fila del objeto de la colección
     */
    public function map($row): array
    {
        $data = $row['data'];
        return [
            $data['report_id'],
            $data['full_name'],
            $data['document'],
            $data['email'],
            $data['phone'],
            $data['company'],
            $data['debt_type'],
            $data['situation'],
            $data['days'],
            $data['entity'],
            $data['amount'],
            $data['line_total'],
            $data['line_used'],
            $data['created_at'],
            $data['status'],
        ];
    }

    /**
     * Tamaño del chunk para procesar en lotes (optimización de memoria)
     */
    public function chunkSize(): int
    {
        return 500; // Procesar 500 filas a la vez
    }

    /**
     * Determina el estado basado en el status y días de vencimiento 
     */
    private function getEstado($status, $expirationDays): string
    {
        if ($expirationDays === 0) {
            return 'Al día';
        }

        if ($expirationDays > 0 && $expirationDays <= 30) {
            return 'Vencido (< 30 días)';
        }

        if ($expirationDays > 30 && $expirationDays <= 60) {
            return 'Vencido (30-60 días)';
        }

        if ($expirationDays > 60) {
            return 'Vencido (> 60 días)';
        }

        // Estados específicos
        $statusMap = [
            'NOR' => 'Normal',
            'CPP' => 'Cuenta por pagar',
            'DEF' => 'Defectuoso',
            'PER' => 'Perdido',
        ];

        return $statusMap[$status] ?? 'Desconocido';
    }
}
