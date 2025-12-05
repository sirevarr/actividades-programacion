<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-danger { background: #dc3545; color: white; border: none; cursor: pointer; }
        .search { margin: 20px 0; }
        .search input { padding: 8px; width: 300px; }
        .search button { padding: 8px 15px; background: #17a2b8; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Inventario</h1>
    <a href="{{ route('inventories.create') }}" class="btn btn-primary">Nuevo Item</a>

    <div class="search">
        <form action="{{ route('inventories.search') }}" method="GET">
            <input type="text" name="buscar" placeholder="Buscar por producto o código...">
            <button type="submit">Buscar</button>
        </form>
    </div>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Código</th>
                <th>Cantidad</th>
                <th>Ubicación</th>
                <th>Fecha Ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inventories as $inventory)
            <tr>
                <td>{{ $inventory->id }}</td>
                <td>{{ $inventory->producto }}</td>
                <td>{{ $inventory->codigo }}</td>
                <td>{{ $inventory->cantidad }}</td>
                <td>{{ $inventory->ubicacion }}</td>
                <td>{{ $inventory->fecha_ingreso }}</td>
                <td>
                    <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No hay items en inventario</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>