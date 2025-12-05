<!DOCTYPE html>
<html>
<head>
    <title>Reportes</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-success { background: #28a745; color: white; }
        .btn-danger { background: #dc3545; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Reportes</h1>
    <a href="{{ route('reports.create') }}" class="btn btn-primary">Nuevo Reporte</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tipo</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reports as $report)
            <tr>
                <td>{{ $report->id }}</td>
                <td>{{ $report->titulo }}</td>
                <td>{{ $report->tipo }}</td>
                <td>{{ $report->fecha_inicio }}</td>
                <td>{{ $report->fecha_fin }}</td>
                <td>
                    <a href="{{ route('reports.show', $report) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('reports.export', $report) }}" class="btn btn-success">Exportar</a>
                    <form action="{{ route('reports.destroy', $report) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No hay reportes</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>