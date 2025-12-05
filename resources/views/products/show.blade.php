<!DOCTYPE html>
<html>
<head>
    <title>Ver Producto</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .info { margin-bottom: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Detalle del Producto</h1>
    
    <div class="info"><strong>ID:</strong> {{ $product->id }}</div>
    <div class="info"><strong>Nombre:</strong> {{ $product->nombre }}</div>
    <div class="info"><strong>Descripción:</strong> {{ $product->descripcion }}</div>
    <div class="info"><strong>SKU:</strong> {{ $product->sku }}</div>
    <div class="info"><strong>Precio:</strong> ${{ number_format($product->precio, 2) }}</div>
    <div class="info"><strong>Stock:</strong> {{ $product->stock }}</div>
    
    <br>
    <a href="{{ route('products.index') }}" class="btn">Volver</a>
</body>
</html>