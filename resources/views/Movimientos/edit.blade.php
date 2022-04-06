@extends('layouts.app')
@section('content')
<a href="{{route('movimientos.update', $movimientos->mov_id)}}" method="POST"></a>
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
        <input type="date" class="form-control" id="mov_fecha" value="{{$movimientos->mov_fecha}}" name="mov_fecha">
      </div>
      <div class="col-md-6 p-3" >
        Ingreso<input type="radio" name="mov_tipo" value="1"> 
        Egreso<input type="radio" name="mov_tipo" value="0"> 
      </div>
       
       <div class="col-md-6">
        <label for="">Cantidad</label>
        <input  value="{{$movimientos->mov_cantidad}}" type="text" class="form-control" id="mov_cantidad" name="mov_cantidad">
       </div>

       <div class="col-md-6">
        <label for="">Detalle</label>
        <input type="text" class="form-control"  value="{{$movimientos->mov_detalle}}" id="mov_detalle" name="mov_detalle">
       </div>
    
    <div class="col-md-12 mt-3">
        <button class="btn btn-succes">Guardar</button>
        
    </div>
  

   </div>
</div>


@endsection