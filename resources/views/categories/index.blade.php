<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
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
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nueva Categoría</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->nombre }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->descripcion }}</td>
                <td>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No hay categorías</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>