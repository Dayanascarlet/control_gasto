@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de usuarios</h2>

	<table class="table">
		<th> # </th>
		<th> Nombre </th>
		<th> Apellido </th>
		<th> Cedula </th>
		<th> Telefono </th>
		<th> Fecha de Nacimiento </th>
		<th> Correo </th>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_nombre}}</td>
		<td>{{$u->usu_apellido}}</td>
		<td>{{$u->usu_cedula}}</td>
		<td>{{$u->usu_telefono}}</td>
		<td>{{$u->usu_fecha_nacimiento}}</td>
		<td>{{$u->email}}</td>
	</tr>
	@endforeach
	</table>

@endsection