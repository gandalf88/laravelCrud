@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Productos</div>
                                @if(Session::has('message'))
                                    <p class='alert alert-success'>{{Session::get('message')}}</p>
                                @endif
				<div class="panel-body">
                                    <p>
                                        <a class="btn btn-info" href="{{route('productos.create')}}" role="">
                                            Agregar Producto
                                        </a>    
                                    </p>
                                    @include('productos.partials.table');
                                    {!!$productos->render()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
