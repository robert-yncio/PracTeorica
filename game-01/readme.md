# Game 01 - Generador de Reportes Crediticios

## Contexto

Tienes un sistema de suscripciones que almacena información crediticia de usuarios. Cada suscriptor puede tener múltiples reportes asociados a diferentes períodos, y cada reporte puede contener información sobre préstamos, otras deudas y tarjetas de crédito.

La base de datos de ejemplo se encuentra en el archivo `database.sql`.

## Challenge

Desarrollar en **Laravel** un generador de reportes que exporte un archivo **XLSX** con la siguiente información:

| Campo | Descripción |
|-------|-------------|
| ID | Identificador del reporte |
| Nombre Completo | Nombre del suscriptor |
| DNI | Documento de identidad |
| Email | Correo electrónico |
| Teléfono | Número de contacto |
| Compañía | Banco o entidad asociada a la deuda |
| Tipo de deuda | Préstamo, Tarjeta de crédito u Otra deuda |
| Situación | Estado del crédito (NOR, CPP, DEF, PER) |
| Atraso | Días de vencimiento |
| Entidad | Entidad financiera o comercial |
| Monto total | Monto de la deuda |
| Línea total | Línea de crédito aprobada (aplica para tarjetas) |
| Línea usada | Línea de crédito utilizada (aplica para tarjetas) |
| Reporte subido el | Fecha de creación del reporte |
| Estado | Estado general del registro |

### Filtros requeridos

- **Rango de fechas**: El reporte debe poder filtrarse por fecha de creación.

## Consideraciones importantes

El documento generado puede crecer exponencialmente en contenido. Debes considerar:

1. **Optimización de memoria**: ¿Cómo manejarías un reporte con millones de registros sin agotar la memoria del servidor?

2. **Optimización de consultas**: ¿Cómo estructurarías las consultas a la base de datos para evitar problemas de rendimiento?

3. **Escalabilidad**: ¿Qué estrategias implementarías pensando en que el volumen de datos puede multiplicarse en el futuro?

## Entregables

1. Código funcional en Laravel
2. Breve explicación de las decisiones técnicas tomadas para optimización

> 🚨 Buscamos a alguien que pueda anticipar problemas futuros mientras desarrolla.

