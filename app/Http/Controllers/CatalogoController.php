<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogo;

class CatalogoController extends Controller
{
  	public function get(){
		
		$datos = Catalogo::all();

		return view('mensajes',['mensajes' => $datos]);
	}
}
