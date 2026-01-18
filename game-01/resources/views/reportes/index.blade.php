<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Exportar Reporte Crediticio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        input[type="date"]:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .date-range {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .export-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }
        
        .export-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        
        .export-button:active {
            transform: translateY(0);
        }
        
        .export-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .loading {
            display: none;
            text-align: center;
            color: #667eea;
            margin-top: 15px;
            font-size: 14px;
        }
        
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        
        .info-box p {
            color: #555;
            font-size: 13px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exportar Reporte Crediticio</h1>
        <p class="subtitle">Genera un archivo Excel con toda la información de reportes crediticios</p>
        
        <form action="{{ route('reportes.export') }}" method="GET" id="exportForm">
            <div class="form-group">
                <label for="start_date">Fecha de inicio:</label>
                <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}" required>
            </div>
            
            <div class="form-group">
                <label for="end_date">Fecha de fin:</label>
                <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}" required>
            </div>
            
            <button type="submit" class="export-button" id="exportBtn">
                Generar Excel
            </button>
        </form>
        
        <div class="loading" id="loading">
            Generando archivo... Por favor espera
        </div>
    </div>
    
    <script>
        document.getElementById('exportForm').addEventListener('submit', function(e) {
            const btn = document.getElementById('exportBtn');
            const loading = document.getElementById('loading');
            btn.disabled = true;
            loading.style.display = 'block';
        });
    </script>
</body>
</html>
