<!DOCTYPE html>
<html>
<head>
    <title>Ver Perfil</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .info { margin-bottom: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; background: #007bff; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Detalle del Perfil</h1>
    
    <div class="info"><strong>ID:</strong> {{ $profile->id }}</div>
    <div class="info"><strong>Usuario ID:</strong> {{ $profile->user_id }}</div>
    <div class="info"><strong>Teléfono:</strong> {{ $profile->telefono }}</div>
    <div class="info"><strong>Dirección:</strong> {{ $profile->direccion }}</div>
    <div class="info"><strong>Ciudad:</strong> {{ $profile->ciudad }}</div>
    <div class="info"><strong>País:</strong> {{ $profile->pais }}</div>
    
    <br>
    <a href="{{ route('profiles.index') }}" class="btn">Volver</a>
</body>
</html>