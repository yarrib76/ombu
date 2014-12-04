<?php namespace Ombu\Http\Controllers;

use Ombu\Http\Requests;
use Ombu\Http\Controllers\Controller;
use Ombu\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserController extends Controller {

	public function __construct (User $user){

		$this->user = $user;

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->get();
		return view('User.index', compact('users'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(User $user)
	{
		if ( is_null($user->name))
		{	
				throw new ModelNotFoundException("No se encontro al usuario");
		}
		return view('User.show', compact('user'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('User.edit', compact('user'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
