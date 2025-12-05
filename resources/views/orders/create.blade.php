<!DOCTYPE html>
<html>
<head>
    <title>Nueva Orden</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nueva Orden</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Número de Orden:</label>
            <input type="text" name="numero_orden" required>
        </div>
        <div class="form-group">
            <label>Usuario ID:</label>
            <input type="number" name="user_id" required>
        </div>
        <div class="form-group">
            <label>Total:</label>
            <input type="number" name="total" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <select name="estado">
                <option value="pendiente" selected>Pendiente</option>
                <option value="procesando">Procesando</option>
                <option value="enviado">Enviado</option>
                <option value="entregado">Entregado</option>
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>