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
        </tr>
        @endforeach
    </tbody>
</table>
