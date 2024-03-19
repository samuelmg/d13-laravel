<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Materia: {{ $materia->nombre }}</h1>
            <h3>Créditos: {{ $materia->creditos }}</h3>

            <a class="btn btn-xl btn-success" href="{{ route('materia.inscribir-alumnos', $materia) }}">Administrar  Alumnos</a>

            <h3>Alumnos Inscritos</h3>
            <br>
            <table>
                <tbody>
                @foreach ($materia->alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->nombre }}</td>
                        <td>
                            <form action="{{ route('materia.baja-alumno', ['materia' => $materia]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="alumno_id" value="{{ $alumno->id }}">
                                <button type="submit">Baja</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>