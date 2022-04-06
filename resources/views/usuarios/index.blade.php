@extends('layouts.app')
@section('content')
<center>
<h2 class="bg-white text-black">Lista de usuarios</h2>
</center>
	<table class="table">
		<th> # </th>
		<th> Nombre </th>
		<th> Apellido </th>
		<th> Cedula </th>
		<th> Telefono </th>
		
		<th> Correo </th>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_nombre}}</td>
		<td>{{$u->usu_apellido}}</td>
		<td>{{$u->usu_cedula}}</td>
		<td>{{$u->usu_telefono}}</td>
		
		<td>{{$u->email}}</td>
	</tr>
	@endforeach
	</table>

@endsection