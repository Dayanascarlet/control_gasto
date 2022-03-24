@extends('layouts.app')
@section('content')
<form action="{{route('movimientos.store')}}" method="POST">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4">
	<label for="">Concepto</label>
	<select name="tip_id"id="tip_id" class="form-control">
		<option value="">Elija una opción</option>
		@foreach($tipos as $t)
		<option value="{{$t->tip_id}}">{{$t->tip_descripcion}}</option>
		@endforeach
	</select>
    </div>
      <div class="col-md-6">
      	<label for="">Fecha</label>
      	<input type="date" class="form-control" id="mov_fecha" name="mov_fecha">
      </div>
      <div class="col-md-6 p-3" >
      	Ingreso<input type="radio" name="mov_tipo" value="1"> 
      	Egreso<input type="radio" name="mov_tipo" value="0"> 
      </div>
       
       <div class="col-md-6">
       	<label for="">Cantidad</label>
       	<input type="text" class="form-control" id="mov_cantidad" name="mov_cantidad">
       </div>

       <div class="col-md-6">
       	<label for="">Detalle</label>
       	<input type="text" class="form-control" id="mov_detalle" name="mov_detalle">
       </div>
    
    <div class="col-md-12 mt-3">
    	<button class="btn btn-succes">Guardar</button>
    	
    </div>

   </div>
</div>
</form>
@endsection