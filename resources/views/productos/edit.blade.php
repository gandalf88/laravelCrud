@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Producto :</div>
                    <div class="panel-body">
                        @include('productos.partials.messages')
                        {!! Form::model( $producto, ['route' => ['productos.update',$producto],'method'=>'PUT'])!!}
                            @include('productos.partials.fields')
                            <button type="submit" class="btn btn-info">Actualizar</button>
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection