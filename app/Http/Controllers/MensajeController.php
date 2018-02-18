<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogos;

class MensajeController extends Controller
{
   function show(Catalogos $messages){

   		return view('unMensaje',[ 'datos' => $messages]);
   }
}
