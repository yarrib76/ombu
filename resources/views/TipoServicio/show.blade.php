@extends('layouts.app')

@section('content')
<h3>{{$tipoServicio->nombre}}</h3>
@if ($tipoServicio->descripcion)
<article class="descripcion">
   {!!  nl2br( $tipoServicio->descripcion)!!}
</article>
@endif
	{!! HTML::linkRoute('tipoServicio.edit', 'Editar', $tipoServicio->slug, array('class' => 'btn btn-primary') ) !!}
	{!! HTML::linkRoute('tipoServicio.index', 'Volver al listado', null, array('class' => 'btn btn-primary') ) !!}
@stop
