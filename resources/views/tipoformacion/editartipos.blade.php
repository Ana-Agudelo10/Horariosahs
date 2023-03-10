
@extends('pagina_principal')
@section('titulo', 'Tipos de formacion')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('tipoformacion.actualizar' , [ 'codigo_tipo_form' =>$mostrar->codigo_tipo_form])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Tipos de formacion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_tipo_form}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="number" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
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
