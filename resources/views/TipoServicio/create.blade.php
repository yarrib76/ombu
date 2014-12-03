@extends('master')
@section('contenido')
<h3><em>{!! $nombre !!}</em></h3>
{!! Form::open(['route' => 'tipoServicio.store']) !!}
@include ('TipoServicio._form')
{!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
