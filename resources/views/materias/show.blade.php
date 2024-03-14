<x-mi-layout nombre-pagina="Info Materia">
    <h1>Materia: {{ $materia->nombre }}</h1>
    <h3>Créditos: {{ $materia->creditos }}</h3>

    <a class="btn btn-xl btn-success" href="{{ route('materia.inscribir-alumnos', $materia) }}">Inscribir Alumnos</a>

    <h3>Alumnos Inscritos</h3>
    <ol>
        @foreach ($materia->alumnos as $alumno)
            <li>{{ $alumno->nombre }}</li>
        @endforeach
    </ol>
</x-mi-layout>