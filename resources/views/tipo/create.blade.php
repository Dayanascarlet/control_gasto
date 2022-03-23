   @extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">Formulario Tipo</h4>
<form action="{{route('tipo.store')}}" method="POST">
	@csrf
	<label for="">detalles de los tipos</label>
	 <input type="text" name="tip_descripcion" id="tip_descripcion">
	 <button class="btn btn-success">guardar</button>
</form>
@endsection