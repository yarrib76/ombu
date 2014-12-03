@extends('layouts.app')
@section('content')
<h3>{{$categoriaServicio->nombre}}</h3>
@if ($categoriaServicio->descripcion)
<article class="descripcion">
   {!!  nl2br( $categoriaServicio->descripcion)!!}
</article>
@endif
	{!! HTML::linkRoute('categoriaServicio.edit', 'Editar', $categoriaServicio->slug, array('class' => 'btn btn-primary') ) !!}
	{!! HTML::linkRoute('categoriaServicio.destroy', 'Eliminar', $categoriaServicio->slug, array('class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la categoria?', 'rel' => 'nofollow') ) !!}
	{!! HTML::linkRoute('categoriaServicio.index', 'Volver al listado', null, array('class' => 'btn btn-primary') ) !!}
@stop
