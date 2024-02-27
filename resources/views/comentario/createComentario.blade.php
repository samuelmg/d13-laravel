<x-mi-layout>
    <a href="{{ route('comentario.index') }}">Listado</a>
    <hr>
    @include('parciales.formError')
    <form action="{{ route('comentario.store') }}" method="POST">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="{{ old('correo') }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label for="comentario">Mensaje:</label><br>
        <textarea name="comentario" id="" cols="30" rows="10">{{ old('comentario') }}</textarea>
        @error('comentario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <select name="ciudad" id="ciudad">
            <option value="GDL" @selected(old('ciudad') == 'GDL')>GDL</option>
            <option value="Tonalá" @selected(old('ciudad') == 'Tonalá')>Tonalá</option>
            <option value="Zapopan" @selected(old('ciudad') == 'Zapopan')>Zapopan</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</x-mi-layout>
