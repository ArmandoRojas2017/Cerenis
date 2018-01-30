@extends ('template/index')

@section ('cuerpo')
    
     <div class="flex-center position-ref full-height container text-black">
 <div class="row jumbotron ">
<div class="col-md-12"" >
<dl class="dl-horizontal">
        @foreach ($mensajes as $men)
    
          <dt>{{ $men->id  }}</dt>

          <dd>
              {{ $men->texto }}
          </dd>
       @endforeach

</dl>
    
</div>

<div class="col-md-12 text-center" >

 <a href="/">
 
 {{ $mensajes[0]['texto'] }}

    <button class="btn btn-primary btn-lg"> Ir A Home</button>
    </a>
</div>
 </div> 
 </div>
  
   
@endsection 