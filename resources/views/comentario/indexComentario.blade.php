<x-mi-layout nombre-pagina="LISTADO COMENTARIOS">
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
                    <td>{{ $comentario->user->name }}</td>
                    <td>{{ $comentario->user->email }}</td>
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
</x-mi-layout>