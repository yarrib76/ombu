<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Restablecer Password</h2>

		<div>
			Para restablecer el password, complete el siguiente formulario: {{ url('password/reset', [$token]) }}.<br><br>

			El mismo expirara en  {{ config('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>
