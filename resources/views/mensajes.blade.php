@extends ('template/index')
	

@section ('cuerpo')
    
   
<div class="container">
<div class="row">
	<div class="col-md-2">

		@extends ('template/panel')

			@section('panelTitulo')
				Hola Mundo
			@endsection
		

	</div>

	<div class="col-md-12">
	<a href="/">
	<button class="btn btn-primary btn-lg"> Ir A Home</button>
 	</a>
		
	</div>
	
 

</div>
</div>
 

  
   
@endsection 

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>