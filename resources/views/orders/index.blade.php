 <!DOCTYPE html>
<html>
<head>
    <title>Órdenes</title>
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
    <h1>Órdenes de Compra</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Nueva Orden</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Número Orden</th>
                <th>Usuario ID</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->numero_orden }}</td>
                <td>{{ $order->user_id }}</td>
                <td>${{ number_format($order->total, 2) }}</td>
                <td>{{ $order->estado }}</td>
                <td>
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No hay órdenes</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>