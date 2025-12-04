<!DOCTYPE html>
<html>
<head>
    <title>Nueva Tarea</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea, select { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Título:</label>
            <input type="text" name="titulo" required>
        </div>
        <div class="form-group">
            <label>Descripción:</label>
            <textarea name="descripcion"></textarea>
        </div>
        <div class="form-group">
            <label>Prioridad:</label>
            <select name="prioridad">
                <option value="baja">Baja</option>
                <option value="media" selected>Media</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <select name="estado">
                <option value="pendiente" selected>Pendiente</option>
                <option value="en_progreso">En Progreso</option>
                <option value="completada">Completada</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha Vencimiento:</label>
            <input type="date" name="fecha_vencimiento">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>