<div class="form-group">
	{!! Form::label('categoriaServicio', 'Categoria de Servicio:') !!}
  {!! Form::select('categoriaServicio', $categorias, null ,['class' => 'form-control'] ) !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }} ">
	{!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
	{!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripción:') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>



