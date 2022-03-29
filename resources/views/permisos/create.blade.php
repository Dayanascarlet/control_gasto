@extends('layouts.app')
@section('content')
<script src="{{asset('js/permisos.js')}}"></script>
<h4 class="bg-dark-write">Formulario de Permisos</h4>
<form action="{{route('permisos.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<label for="">detalles de los permisos</label>
	 <input type="text" name="per_nombre" id="per_nombre">
	 <button  type="submit" class="btn btn-success">guardar</button>
</form>
@endsection