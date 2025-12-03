<!DOCTYPE html>
<html>
<head>
    <title>Estudiantes</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-danger { background: #dc3545; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Estudiantes</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Nuevo Estudiante</a>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->nombre }}</td>
                <td>{{ $student->apellido }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->telefono }}</td>
                <td>{{ $student->fecha_nacimiento }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No hay estudiantes</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>