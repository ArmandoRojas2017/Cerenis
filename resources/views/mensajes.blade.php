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

