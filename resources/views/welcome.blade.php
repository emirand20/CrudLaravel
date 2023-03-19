<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Velocidad</th>
            <th>Posición</th>
            <th>Físico</th>
            <th>Ritmo</th>
            <th>Regate</th>
            <th>Crud</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->velocidad }}</td>
            <td>{{ $p->posicion }}</td>
            <td>{{ $p->fisico }}</td>
            <td>{{ $p->ritmo }}</td>
            <td>{{ $p->regate }}</td>
            <td>
            
                <a href="{{ route('pol.edit', $p->id) }}" class="btn btn-sm btn-primary">Editar</a>

               
                <form action="{{ route('pol.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('pol.create') }}" class="btn btn-success">Agregar</a>
