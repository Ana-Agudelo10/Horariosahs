@extends('tablas')
@section('titulo', 'Programas')
@section('cuerpo')
<div class="table-title">
	<div class="row">
		<div class="col-xs-6">
			<a href="{{route('create_programa')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar</span></a>
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
			<th>Codigo del Programa</th>
			<th>Nombre</th>
			<th>Version del programa</th>
			<th>Nivel de Formacion</th>
			<th>Area</th>
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
			<td>{{$item->codigo_programa}}</td>
			<td>{{$item->nombre}}</td>
			<td>{{$item->version_programa}}</td>
			<td>{{$item->nivel_formacion}}</td>
			<td>{{$item->codigo_area}}</td>
			<td>
				<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection