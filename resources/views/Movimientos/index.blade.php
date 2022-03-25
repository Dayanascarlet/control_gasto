@extends('layouts.app')
@section('content')
<a href="{{route('movimientos.create')}}"class="btn btn-primary btn-sm">nuevo</a>

<table class="table"> 
<th>#</th>

<th>Fecha</th>
<th>Tipo</th>
<th>Cantidad</th>
<th>Detalle</th>
<!-- <th>Acciones</th> -->
@foreach($movimientos as $m)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$m->mov_fecha}}</td>
		<td>{{$m->mov_tipo}}</td>
		<td>{{$m->mov_cantidad}}</td>
		<td>{{$m->mov_detalle}}</td>
		@endforeach
</table>
@endsection