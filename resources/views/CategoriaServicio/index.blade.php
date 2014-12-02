@extends('layouts.app')
@section('content')
@foreach ($categoriaServicios as $categoriaServicio)
<ul class="list-group">
<li class="list-group-item">
{!! link_to_route('categoriaServicio.show', $categoriaServicio->nombre, [$categoriaServicio->slug]) !!}
</li>
</ul>
@endforeach
@stop
