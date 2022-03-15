@extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">Formulario de Permisos</h4>
<form action="{{route('permisos.update',$permisos->per_id)}}" method="POST">
	@csrf
	<label for="">detalles de los permisos</label>
	 <input type="text"  value="{{$permisos->per_nombre}}" name="per_nombre" id="per_nombre">
	 <button class="btn btn-success">guardar</button>
</form>
@endsection