<table>
    <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Resumen</th>
        <th>Total Páginas</th>
        <th>Revista</th>
        <th>Monografía</th>
        <th>Código Editorial</th>        
        <th>Acciones</th>                
    </tr>
    @foreach($recursos as $recurso)
        <tr>    
            <td>{{$recurso->ISBN}}</td>
            <td>{{$recurso->titulo}}</td>
            <td>{{$recurso->resumen}}</td>
            <td>{{$recurso->totalPaginas}}</td>
            <td>{{$recurso->tipoLibro}}</td>
            <td>{{$recurso->revista}}</td>
            <td>{{$recurso->monografia}}</td>
            <td>{{$recurso->codEditorial}}</td>
            <td>
                <a href="{{route('recurso.edit',$recurso)}}">Editar</a>
                @include('recurso.partials.delete')
            </td>
        </tr>    
    @endforeach
</table>
    