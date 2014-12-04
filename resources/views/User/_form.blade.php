				@include('partials.errors.basic')

				<form class="form-horizontal" role="form" method="POST" action="/auth/register">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Nombre</label>
						<div class="col-sm-6">
							<input type="text" id="name" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Correo</label>
						<div class="col-sm-6">
							<input type="email" id="email" name="email" class="form-control" placeholder="Correo Electronico" autocapitalize="off" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-6">
							<input type="password" name="password" class="form-control" placeholder="Ingrese aquí el password">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Confirmar Password</label>
						<div class="col-sm-6">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Confirme su password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-3">
							<button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-user"></i>Registrarse</button>
						</div>
					</div>
				</form>

