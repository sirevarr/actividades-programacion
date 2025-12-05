<!DOCTYPE html>
<html>
<head>
    <title>Editar Inventario</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Editar Item de Inventario</h1>
    <form action="{{ route('inventories.update', $inventory) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Producto:</label>
            <input type="text" name="producto" value="{{ $inventory->producto }}" required>
        </div>
        <div class="form-group">
            <label>Código:</label>
            <input type="text" name="codigo" value="{{ $inventory->codigo }}" required>
        </div>
        <div class="form-group">
            <label>Cantidad:</label>
            <input type="number" name="cantidad" value="{{ $inventory->cantidad }}" required>
        </div>
        <div class="form-group">
            <label>Ubicación:</label>
            <input type="text" name="ubicacion" value="{{ $inventory->ubicacion }}">
        </div>
        <div class="form-group">
            <label>Fecha Ingreso:</label>
            <input type="date" name="fecha_ingreso" value="{{ $inventory->fecha_ingreso }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>