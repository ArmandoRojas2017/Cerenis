<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
   public function get(){

   		$datos = [ 

   					'titulo' => "Practica de Laravel" ,
   					 'autor' => "Armando Rojas" 

   				]; 

   		return view('welcome',$datos);

   }
}
