<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-danger { background: #dc3545; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>SKU</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->sku }}</td>
                <td>${{ number_format($product->precio, 2) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No hay productos</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>