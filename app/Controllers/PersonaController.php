<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('index').
					view('plantilla/footer');
		return $vistas;
	}

	public function personajes()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu1').
					view('personajes').
					view('plantilla/footer');
		return $vistas;
	}
	public function tem()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu1').
					view('temporadas').
					view('plantilla/footer');
		return $vistas;
	}

	public function lib()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu1').
					view('libros').
					view('plantilla/footer');
		return $vistas;
	}

	public function cur()
	{

		
		$vistas = view('plantilla/header').
					view('plantilla/menu1').
					view('curiosidades').
					view('plantilla/footer');
		return $vistas;
	}

	
}
