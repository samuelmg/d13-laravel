<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
</head>
<body>
    <h1>Listado de Comentarios</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->nombre }}</td>
                    <td>{{ $comentario->correo }}</td>
                    <td>{{ $comentario->created_at }}</td>
                    <td>
                        <a href="{{ route('comentario.show', $comentario) }}">Ver</a> |
                        <a href="{{ route('comentario.edit', $comentario) }}">Editar</a> |
                        <form action="{{ route('comentario.destroy', $comentario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>