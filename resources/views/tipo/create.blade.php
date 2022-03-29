   @extends('layouts.app')
@section('content')
<script src="{{asset('js/tipo.js')}}"></script>
<h4 class="bg-dark-write">Formulario Tipo</h4>
<form action="{{route('tipo.store')}}" method="POST" onsubmit="return validar()" >
	@csrf
	<label for="">detalles de los tipos</label>
	 <input type="text" name="tip_descripcion" id="tip_descripcion">
	 <button  type="submit" class="btn btn-success">GUARDAr</button>
</form>
@endsection