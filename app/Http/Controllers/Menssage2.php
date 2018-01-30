<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message;

class Menssage2 extends Controller
{
	public function get(){
		
		$datos = Message::all();

		return view('mensajes',['mensajes' => $datos]);
	}
}
