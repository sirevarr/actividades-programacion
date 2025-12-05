<!DOCTYPE html>
<html>
<head>
    <title>Editar Orden</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Editar Orden</h1>
    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Número de Orden:</label>
            <input type="text" name="numero_orden" value="{{ $order->numero_orden }}" required>
        </div>
        <div class="form-group">
            <label>Usuario ID:</label>
            <input type="number" name="user_id" value="{{ $order->user_id }}" required>
        </div>
        <div class="form-group">
            <label>Total:</label>
            <input type="number" name="total" step="0.01" value="{{ $order->total }}" required>
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <select name="estado">
                <option value="pendiente" {{ $order->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="procesando" {{ $order->estado == 'procesando' ? 'selected' : '' }}>Procesando</option>
                <option value="enviado" {{ $order->estado == 'enviado' ? 'selected' : '' }}>Enviado</option>
                <option value="entregado" {{ $order->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>