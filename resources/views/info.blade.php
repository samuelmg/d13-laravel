<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información</title>
</head>
<body>
    <a href="/contacto">Contacto</a>
    <hr>
    {{ $tipo }}
    <hr>
    <h1>Información</h1>
    @if ($tipo == 'alumno')
        <h2>Alumnos</h2>
        <p>Info para alumnos</p>
    @elseif ($tipo == 'empres')
        <h2>Empresas</h2>
        <p>Infor para empresas</p>
    @else
        <h2>Visitantes</h2>
        <p>Info para visitantes</p>
    @endif
</body>
</html>