@extends('layouts.app')

@section('content')
	<h4 class="bg-dark text-white ">Formulario de registro</h4>
	<form action="{{route('usuarios.store')}}" method="POST" >
		@csrf
		<label for="">Detalle  de Nombre</label>
		<input type="text" name="usu_nombre" id="usu_apellido" >

		<label for="">Detalle  de Apellido</label>
		<input type="text" name="usu_apellido" id="usu_apellido" >

		<label for="">Detalle  de Cedula</label>
		<input type="text" name="usu_cedula" id="usu_cedula" >

		<label for="">Detalle  de Telefono</label>
		<input type="text" name="usu_telefono" id="usu_telefono" >

		<label for="">Detalle  de Fecha</label>
 		<input type="text" name="usu_fecha_nacimiento" id="usu_fecha_nacimiento" >

 		<label for="">Detalle  de Email</label>
 		<input type="text" name="email" id="email" >

 		<label for="password">Detalle  de Contraseña</label>
 		<input type="password" name="password" id="password" >

		<button class="btn btn-success">Guardar</button>
		

	</form>



@endsection