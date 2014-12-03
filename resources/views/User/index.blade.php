@extends('layouts.app')
@section('content')
@foreach ($users as $user)
<ul class="list-group">
<li class="list-group-item">
{!! link_to_route('usuario.show', $user->name, [$user->slug]) !!}
</li>
</ul>
@endforeach
@stop
