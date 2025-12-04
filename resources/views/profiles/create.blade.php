<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Perfil</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nuevo Perfil</h1>
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Usuario ID:</label>
            <input type="number" name="user_id" required>
        </div>
        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono">
        </div>
        <div class="form-group">
            <label>Dirección:</label>
            <textarea name="direccion"></textarea>
        </div>
        <div class="form-group">
            <label>Ciudad:</label>
            <input type="text" name="ciudad">
        </div>
        <div class="form-group">
            <label>País:</label>
            <input type="text" name="pais" value="Venezuela">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>