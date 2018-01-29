<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menssage extends Controller
{
	public function get(){
		return view('mensajes');
	}
}
