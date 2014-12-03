@extends('layouts.app')

@section('content')
<h3>Crear una nueva categoria de servicios</h3>

{!! Form::open(['route' => 'categoriaServicio.store']) !!}

@include ('CategoriaServicio._form')
{!! Form::close() !!}

@stop
