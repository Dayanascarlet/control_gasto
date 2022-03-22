@extends('layouts.app')
@section('content')
<a href="{{route('movimientos.create')}}"class="btn btn-primary btn-sm">nuevo</a>

<table class="table"> 
<th>#</th>
<th>Tipo</th>
<th>concepto</th>
<th>Fecha</th>
<th>Detalle</th>
<th>Cantidad</th>
<th>Acciones</th>
</table>
@endsection