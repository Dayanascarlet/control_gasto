@extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">Formulario de Permisos</h4>
<form action="{{route('permisos.store')}}" method="POST">
	@csrf
	<label for="">detalles de los permisos</label>
	 <input type="text" name="per_nombre" id="per_nombre">
	 <button class="btn btn-success">guardar</button>
</form>
@endsection