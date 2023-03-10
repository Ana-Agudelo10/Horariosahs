@extends('tablas')
@section('titulo', 'Areas')
@section('cuerpo')
<div class="table-title">
	<div class="row">
		<div class="col-xs-6">
			<a href="{{route('create_area')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar</span></a>
		</div>
	</div>
</div>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>
				<span class="custom-checkbox">
					<input type="checkbox" id="selectAll">
					<label for="selectAll"></label>
				</span>
			</th>
			<th>Codigo Area</th>
			<th>Nombre</th>
			<th>Codigo Red</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($mostrar as $item)
		<tr>
			<td>
				<span class="custom-checkbox">
					<input type="checkbox" id="checkbox1" name="options[]" value="1">
					<label for="checkbox1"></label>
				</span>
			</td>
			<td>{{$item->codigo_area}}</td>
			<td>{{$item->nombre}}</td>
			<td>{{$item->codigo_red}}</td>
			<td>
				<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection