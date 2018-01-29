@extends ('template/index')

@section ('cuerpo')
    
    <div class="flex-center position-ref full-height">
            <div class="content container jumbotron" >
                <div class="title m-b-md">
                    {{ $titulo }}
                </div>

                <h2>by: {{ $autor }} </h2>
				<a href="mensaje" >	
                <button class="btn btn-primary btn-lg" id=mensaje > Ver Mensajes </button> </a>
            </div>
        </div>
@endsection 

