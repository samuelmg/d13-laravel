<x-mi-layout nombre-pagina="Inscribir Alumnos">
    <h1>Materia: {{ $materia->nombre }}</h1>
    <h2>Inscribir Alumnos</h2>

    <form action="{{ route('materia.store-alumnos', $materia) }}" method="POST">
        @csrf
        <select name="alumno_id[]" multiple>
            @foreach ($alumnos as $alumno)
                <option value="{{ $alumno->id }}" @selected(false !== array_search($alumno->id, $materia->alumnos->pluck('id')->toArray()))>{{ $alumno->nombre }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Inscribir">
    </form>

</x-mi-layout>