@extends('layouts.app')
@section('content')
<h3>{{$user->name}}</h3>
	{!! HTML::linkRoute('usuario.edit', 'Editar', $user->slug, array('class' => 'btn btn-primary') ) !!}
	{!! HTML::linkRoute('usuario.destroy', 'Eliminar', $user->slug, array('class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la categoria?', 'rel' => 'nofollow') ) !!}
	{!! HTML::linkRoute('usuario.index', 'Volver al listado', null, array('class' => 'btn btn-primary') ) !!}
@stop
