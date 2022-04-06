<center><h1>REPORTE</h1></center>

<table border="2"> 
<th height="25" width="50"  bgcolor="yellow" >#</th>
<th height="25" width="50"  bgcolor="yellow">Fecha</th>
<th height="25" width="50"  bgcolor="yellow">Usuario</th>
<th height="25" width="50"  bgcolor="yellow">Concepto</th>
<th height="25" width="50"  bgcolor="yellow">Cantidad</th>
<th height="25" width="50"  bgcolor="yellow">Detalle</th>
<th height="25" width="50"  bgcolor="yellow">Tipo</th>
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
				

		@endforeach

<tr>
		<th colspan="2">
		Totales:
		<th>Ingresos:{{$t_ing}}</th>
		<th>Egresos:{{$t_egr}}</th>
		<th>Saldo:{{$t_saldo}}</th>
	</th>
</tr>	
</tr>		
</table>

