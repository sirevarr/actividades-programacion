<!DOCTYPE html>
<html>
<head>
    <title>Ver Estudiante</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .info { margin-bottom: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Detalle del Estudiante</h1>
    
    <div class="info"><strong>ID:</strong> {{ $student->id }}</div>
    <div class="info"><strong>Nombre:</strong> {{ $student->nombre }}</div>
    <div class="info"><strong>Apellido:</strong> {{ $student->apellido }}</div>
    <div class="info"><strong>Email:</strong> {{ $student->email }}</div>
    <div class="info"><strong>Teléfono:</strong> {{ $student->telefono }}</div>
    <div class="info"><strong>Fecha Nacimiento:</strong> {{ $student->fecha_nacimiento }}</div>
    
    <br>
    <a href="{{ route('students.index') }}" class="btn">Volver</a>
</body>
</html>