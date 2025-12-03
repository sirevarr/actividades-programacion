<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Estudiante</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nuevo Estudiante</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="form-group">
            <label>Apellido:</label>
            <input type="text" name="apellido" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono">
        </div>
        <div class="form-group">
            <label>Fecha Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>