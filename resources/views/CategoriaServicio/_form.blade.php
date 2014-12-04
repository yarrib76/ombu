<div class="form-group">
	{!! Form::label('nombre', 'Nombre:', ['class' => 'col-sm-3 control-label']) !!}
	<div class="col-sm-6">
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre',   'value'=> old('nombre') ]) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion:',  ['class' => 'col-sm-3 control-label']) !!}
	<div class="col-sm-6">
	{!! Form::textArea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion de la categoria de servicio',   'value'=> old('descripcion') ]) !!}
	</div>
</div>
