@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>
                    <div class="panel-body">
                        @include('productos.partials.messages')
                        {!! Form::open(['route'=>'productos.store','method'=>'POST'])!!}
                            @include('productos.partials.fields')
                            <button type="submit" class="btn btn-info">Guardar</button>
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
