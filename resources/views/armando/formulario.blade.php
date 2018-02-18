@extends('template.index')

@section('cuerpo')
<div class="container" >
<div class="row">
	<form action="/recibe" method="post">
		

		<input name=opino type="text" placeholder="Que opinas sobre laravel??">

		{{ csrf_field() }}

	</form>
</div>
</div>


@endsection