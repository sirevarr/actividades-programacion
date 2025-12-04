<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $product->nombre }}" required>
        </div>
        <div class="form-group">
            <label>Descripción:</label>
            <textarea name="descripcion">{{ $product->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label>SKU:</label>
            <input type="text" name="sku" value="{{ $product->sku }}" required>
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" value="{{ $product->precio }}" required>
        </div>
        <div class="form-group">
            <label>Stock:</label>
            <input type="number" name="stock" value="{{ $product->stock }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>