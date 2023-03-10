@extends('pagina_principal')
@section('titulo', 'Redes')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('redes.actualizar',['red'=>$mostrar->codigo_red])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Redes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <h2>{{ $mostrar->codigo_red }}</h2>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
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