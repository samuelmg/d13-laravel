<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Comentario</title>
</head>
<body>
    @include('parciales.formError')
    <form action="{{ route('comentario.update', $comentario) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $comentario->nombre }}">
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="{{ old('correo') ?? $comentario->correo }}">
        <br>
        <label for="comentario">Mensaje:</label><br>
        <textarea name="comentario" cols="30" rows="10">{{ old('comentario') ?? $comentario->comentario }}</textarea>
        <br>
        <select name="ciudad" id="ciudad">
            <option value="">---</option>
            <option value="GDL" @selected(old('ciudad') == 'GDL' ?? $comentario->ciudad == 'GDL')>GDL</option>
            <option value="Tonalá" @selected(old('ciudad') == 'Tonalá' ?? $comentario->ciudad == 'Tonalá')>Tonalá</option>
            <option value="Zapopan" @selected(old('ciudad') == 'Zapopan' ?? $comentario->ciudad == 'Zapopan')>Zapopan</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>