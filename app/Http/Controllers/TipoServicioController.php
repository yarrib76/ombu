<?php namespace Ombu\Http\Controllers;

use Ombu\Http\Controllers\Controller;
use Ombu\TipoServicio;
use Ombu\CategoriaServicio;

class TipoServicioController extends Controller {

	private $tipoServicio;

		public function __construct (TipoServicio $tipoServicio){

		$this->tipoServicio = $tipoServicio;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$tipoServicios = $this->tipoServicio->get();
		return view('TipoServicio.index', compact('tipoServicios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$categorias = CategoriaServicio::lists('nombre', 'id');
		$nombre = 'Agregar un tipo de Servicio';

		return view ('TipoServicio.create', compact('categorias', 'nombre'));
	
		
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
	public function show(TipoServicio $tipoServicio)
	{
		return view('TipoServicio.show', compact('tipoServicio'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(TipoServicio $tipoServicio)
	{
		$categorias = CategoriaServicio::lists('nombre', 'id');
		$nombre = 'Agregar un tipo de Servicio';
		
		return view('TipoServicio.edit', compact('tipoServicio', 'categorias', 'nombre'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TipoServicio $tipoServicio)
	{
		//
		$tipoServicio->fill(\Request::input())->save();
		return redirect ('tipoServicio');
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
