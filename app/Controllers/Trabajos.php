<?php namespace App\Controllers;

class Trabajos extends BaseController
{
	public function index()
	{
	
		return view('trabajos/index');
	}

	public function formularios()
	{
	
		return view('trabajos/formularios/index');
	}

}