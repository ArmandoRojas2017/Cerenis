@extends ('template/index')
	

@section ('cuerpo')
    
   
<h1 class="bg-inverse text-center"> Mensajes del sistema </h1>


<div class="row">
	<h2 class="text-center"> 
		Un mensaje con Id = {{   $datos->id   }}
	</h2>

	<blockquote>
		{{ $datos->Descripcion }}
	</blockquote>

	
</div>


  
   
@endsection 
