@extends('layouts.app')

@section('content')
<h2>{{$tipoServicio->nombre}}</h2>

{!! Form::model($tipoServicio, ['route' => ['tipoServicio.update', $tipoServicio->slug], 'method' => 'PATCH']) !!}

@include ('tipoServicio._form')



<div class="form-group">
	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! HTML::linkRoute('tipoServicio.destroy', 'Eliminar', $tipoServicio->slug, array('class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la categoria?', 'rel' => 'nofollow') ) !!}
	{!! HTML::linkRoute('tipoServicio.index', 'Volver al listado', null, array('class' => 'btn btn-primary') ) !!}
</div>

{!! Form::close() !!}


@stop
