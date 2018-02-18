@extends('template.index')

@section('cuerpo')
<div class="container" >
<div class="row">
	<form action="/recibe" method="post">
		
		<input type="text" placeholder="Que opinas sobre laravel??">

	</form>
</div>
</div>


@endsection