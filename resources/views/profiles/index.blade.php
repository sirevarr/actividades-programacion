<!DOCTYPE html>
<html>
<head>
    <title>Perfiles</title>
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
    <h1>Perfiles de Usuario</h1>
    <a href="{{ route('profiles.create') }}" class="btn btn-primary">Nuevo Perfil</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario ID</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->user_id }}</td>
                <td>{{ $profile->telefono }}</td>
                <td>{{ $profile->ciudad }}</td>
                <td>{{ $profile->pais }}</td>
                <td>
                    <a href="{{ route('profiles.show', $profile) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('profiles.edit', $profile) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('profiles.destroy', $profile) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No hay perfiles</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>