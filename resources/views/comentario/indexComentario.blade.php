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
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->nombre }}</td>
                    <td>{{ $comentario->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>