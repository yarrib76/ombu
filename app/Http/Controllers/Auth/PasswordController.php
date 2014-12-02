<?php namespace Ombu\Http\Controllers\Auth;

use Ombu\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;


class PasswordController extends Controller {


	use ResetsPasswords;

	/**
	 * Redirect path after password reset.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Envia un vinculo para reestablecer el password al usuario.
	 *
	 * @param  Request  $request
	 * @return Response
	 */

	public function postEmail(Request $request)
	{
		$this->validate($request, ['email' => 'required']);


		switch ($response = $this->passwords->sendResetLink($request->only('email'), function ($message)

					{
						$message->subject('Restablecer el password');
					}

					))
		{
			case PasswordBroker::RESET_LINK_SENT:
				return redirect()->back()->with('status', trans($response));

			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' =>trans($response)]);
		}
	}


}
