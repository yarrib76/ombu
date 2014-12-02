@extends('layouts.app')

@section('content')
<h2>{{$categoriaServicio->nombre}}</h2>

{!! Form::model($categoriaServicio, ['route' => ['categoriaServicio.update', $categoriaServicio->slug], 'method' => 'PATCH']) !!}

@include ('CategoriaServicio._form')



<div class="form-group">
	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! HTML::linkRoute('categoriaServicio.destroy', 'Eliminar', $categoriaServicio->slug, array('class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la categoria?', 'rel' => 'nofollow') ) !!}
	{!! HTML::linkRoute('categoriaServicio.index', 'Volver al listado', null, array('class' => 'btn btn-primary') ) !!}
</div>

{!! Form::close() !!}


@stop
