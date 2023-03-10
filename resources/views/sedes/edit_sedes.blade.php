@extends('pagina_principal')
@section('titulo', 'Sedes')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('sedes.actualizar', [ 'codigo_centro'=>$mostrar->codigo_centro])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Sede</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_centro}}</h2>
                    </div>
                    <div class="form-group">
                        <label>Codigo</label>
                        <input type="text" class="form-control" name="codigo_centro" value="{{$mostrar->codigo_centro}}" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="direccion"  value="{{$mostrar->direccion}}" required >
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
