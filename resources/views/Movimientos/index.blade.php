@extends('layouts.app')
@section('content')
<a href="{{route('movimientos.create')}}"class="btn btn-primary btn-sm">nuevo</a>
<form action="{{route('movimientos.search')}}" method="POST">
@csrf
 Desde <input type="date" name="desde" value="{{$desde}}">
 Hasta<input type="date" name="hasta" value="{{$hasta}}">
 <button class="btn btn-succes" value="btn_buscar" name="btn_buscar">Buscar</button>
  <button class="btn btn-succes" value="btn_pdf" name="btn_pdf">PDF</button> 
</form>
<table class="table"> 
<th>#</th>
<th>Fecha</th>
<th>Usuario</th>
<th>Concepto</th>
<th>Cantidad</th>
<th>Detalle</th>
<th>Tipo</th>
 <?php
$t_ing=0;
$t_egr=0;
$t_saldo=0;
?> 
<!-- <th>Acciones</th> -->
@foreach($movimientos as $mov)

<?php

if ($mov->mov_tipo==1) {
	$t_ing+=$mov->mov_cantidad;

}else{
	$t_egr+=$mov->mov_cantidad;
}
$t_saldo=$t_ing-$t_egr;
?>



	<tr>
        <td>{{$loop->iteration}}</td>  
		<td>{{$mov->mov_fecha}}</td>
		<td>{{$mov->usu_nombre}}</td>
		<td>{{$mov->tip_descripcion}}</td>
		<td>${{number_format($mov->mov_cantidad,2)}}</td>
		<td>{{$mov->mov_detalle}}</td>


		@if($mov->mov_tipo==1)
		<td>Ingresos</td>
		@else
		<td>Egresos</td>
		@endif
				<td>
			<a href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn btn-info sm">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
			 	<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
			</svg>
			</a>

			<a href=""class="btn btn-danger">
		    <form action="{{route('movimientos.destroy',$mov->mov_id)}}"method="post"onsubmit="return confirm('¿Desea eliminar?')">
		    	@csrf
		    	<button >Eliminar </button>
		    	
		    </form>
		</a>
		</td>

		@endforeach

<tr>
	<th colspan="2">
		totales:
		<th>Ingresos:{{$t_ing}}</th>
		<th>Egresos:{{$t_egr}}</th>
		<th>Saldo:{{$t_saldo}}</th>
	</th>
</tr>		
</table>


@endsection