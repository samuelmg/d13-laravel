<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <a href="/informacion">Información</a>
    <hr>
    <form action="/contacto" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo">
        <br>
        <label for="comentario">Mensaje:</label><br>
        <textarea name="comentario" id="" cols="30" rows="10"></textarea>
        <br>
        <select name="ciudad" id="ciudad">
            <option value="GDL">GDL</option>
            <option value="Tonalá">Tonalá</option>
            <option value="Zapopan">Zapopan</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>