<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoría</th>
       
    </tr>
    @foreach($productos as $producto)
        <tr>    
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->categoria}}</td>
            <td>
                <a href="{{route('productos.edit',$producto)}}">Editar</a>

                @include('productos.partials.delete')
            </td>
        </tr>    
    @endforeach
</table>
    