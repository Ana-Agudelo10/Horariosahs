@extends('tablas')
@section('titulo', 'Redes')
@section('cuerpo')
<div class="table-title">
	<div class="row">
		<div class="col-xs-6">
			<a href="{{route('create_red')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar</span></a>
						
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
				<th>Codigo Red</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
	</thead>
	@foreach($mostrar as $item)
	<tbody>
		<tr>
			<td>
				<span class="custom-checkbox">
					<input type="checkbox" id="checkbox1" name="options[]" value="1">
					<label for="checkbox1"></label>
				</span>
			</td>
			<td>{{$item->codigo_red}}</td>
			<td>{{$item->nombre}}</td>
			<td>
				<a href="{{route('update_red')}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        
			</td>
			</tr>
	@endforeach
	</tbody>
</table>
@endsection