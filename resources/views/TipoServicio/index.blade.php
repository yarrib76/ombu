@extends('layouts.app')

@section('content')
@foreach ($tipoServicios as $tipoServicio)
<ul class="list-group">
<li class="list-group-item">
{!! link_to_route('tipoServicio.show', $tipoServicio->nombre, [$tipoServicio->slug]) !!}
</li>
</ul>
@endforeach
@stop
