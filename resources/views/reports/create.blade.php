<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Reporte</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea, select { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nuevo Reporte</h1>
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Título:</label>
            <input type="text" name="titulo" required>
        </div>
        <div class="form-group">
            <label>Tipo:</label>
            <select name="tipo" required>
                <option value="ventas">Ventas</option>
                <option value="inventario">Inventario</option>
                <option value="usuarios">Usuarios</option>
                <option value="general">General</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" required>
        </div>
        <div class="form-group">
            <label>Fecha Fin:</label>
            <input type="date" name="fecha_fin" required>
        </div>
        <div class="form-group">
            <label>Contenido:</label>
            <textarea name="contenido"></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>