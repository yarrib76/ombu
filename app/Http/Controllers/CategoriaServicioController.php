<?php namespace Ombu\Http\Controllers;

use Ombu\Http\Controllers\Controller;
use Ombu\CategoriaServicio;
use Ombu\Http\Requests\CrearCategoriaVehiculoRequest;


class CategoriaServicioController extends Controller {
	private $categoriaServicio;

	public function __construct (CategoriaServicio $categoriaServicio){

		$this->categoriaServicio = $categoriaServicio;

	}

	public function index (){

		$categoriaServicios = $this->categoriaServicio->get();
		return view('CategoriaServicio.index', compact('categoriaServicios'));


	}

	public function create (){

		return view ('CategoriaServicio.create');

	}

	public function store (CategoriaServicio $categoriaServicio,  CrearCategoriaVehiculoRequest $request){

		$categoriaServicio->create($request->all());
		return redirect()->route('categoriaServicio.index');

	}

	public function show(CategoriaServicio $categoriaServicio){

		return view('CategoriaServicio.show', compact('categoriaServicio'));

	}

	public function edit(CategoriaServicio $categoriaServicio){


		return view('CategoriaServicio.edit', compact('categoriaServicio'));

	}

	public function update(CategoriaServicio $categoriaServicio){

		//$categoriaServicio->fill($request->input())->save();
		$categoriaServicio->fill(\Request::input())->save();
		return redirect ('categoriaServicio');

	}

	public function destroy (CategoriaServicio $categoriaServicio){

		$categoriaServicio->delete();
		return redirect ('categoriaServicio');

	}

}
