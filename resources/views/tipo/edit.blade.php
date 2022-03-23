@extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">Formulario de Tipos</h4>
<form action="{{route('tipo.update',$tipo->tip_id)}}" method="POST">
	@csrf
	<label for="">detalles de los Tipos</label>
	 <input type="text"  value="{{$tipo->tip_descripcion}}" name="tip_descripcion" id="tip_descripcion">
	 <button class="btn btn-success">guardar</button>
</form>
@endsection