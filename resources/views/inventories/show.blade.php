<!DOCTYPE html>
<html>
<head>
    <title>Ver Inventario</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .info { margin-bottom: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Detalle del Item de Inventario</h1>
    
    <div class="info"><strong>ID:</strong> {{ $inventory->id }}</div>
    <div class="info"><strong>Producto:</strong> {{ $inventory->producto }}</div>
    <div class="info"><strong>Código:</strong> {{ $inventory->codigo }}</div>
    <div class="info"><strong>Cantidad:</strong> {{ $inventory->cantidad }}</div>
    <div class="info"><strong>Ubicación:</strong> {{ $inventory->ubicacion }}</div>
    <div class="info"><strong>Fecha Ingreso:</strong> {{ $inventory->fecha_ingreso }}</div>
    
    <br>
    <a href="{{ route('inventories.index') }}" class="btn">Volver</a>
</body>
</html>