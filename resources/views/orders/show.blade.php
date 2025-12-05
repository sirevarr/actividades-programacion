<!DOCTYPE html>
<html>
<head>
    <title>Ver Orden</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .info { margin-bottom: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Detalle de la Orden</h1>
    
    <div class="info"><strong>ID:</strong> {{ $order->id }}</div>
    <div class="info"><strong>Número Orden:</strong> {{ $order->numero_orden }}</div>
    <div class="info"><strong>Usuario ID:</strong> {{ $order->user_id }}</div>
    <div class="info"><strong>Total:</strong> ${{ number_format($order->total, 2) }}</div>
    <div class="info"><strong>Estado:</strong> {{ $order->estado }}</div>
    
    <br>
    <a href="{{ route('orders.index') }}" class="btn">Volver</a>
</body>
</html>