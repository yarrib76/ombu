@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Crear una nueva categoria de servicios</div>
					<div class="panel-body">
						@include('partials.errors.basic')
						{!! Form::open(['route' => 'categoriaServicio.store', 'class' => 'form-horizontal']) !!}
							@include ('CategoriaServicio._form')
						{!! Form::close() !!}
				</div> <!-- panel body -->
			</div> <!-- panel -->
		</div> <!-- col -->
	</div> <!-- row -->
</div> <!-- container -->
@stop
