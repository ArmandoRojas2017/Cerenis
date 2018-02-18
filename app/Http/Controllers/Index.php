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

   public function formulario(){

   		return view('armando.formulario');
   }

   /*Probando Validaciones*/

   public function recibe(Request $request){

      // auntenticar 
      
      /*Obligatorio el objecto request, el array de reglas */
      $this->validate($request , [
            'texto' => 'required'
         ]  );

      return "LLego!";
   }
}
