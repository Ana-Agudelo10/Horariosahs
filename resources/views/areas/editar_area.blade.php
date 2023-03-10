@extends('pagina_principal')
@section('titulo', 'Areas')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('Areas.actualizar' , [ 'codigo_area' =>$mostrar->codigo_area])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Areas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_area}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Nombre del Area</label>
                        <select class="form-group" name="nombre">

                                <option
                                @if ($mostrar->nombre='INFORMÁTICA, DISEÑO Y DESARROLLO DE SOFTWARE')
                            @selected(true)
                                @endif
                                value="INFORMÁTICA, DISEÑO Y DESARROLLO DE SOFTWARE">INFORMÁTICA, DISEÑO Y DESARROLLO DE SOFTWARE</option>
                        </select>
                    </div>
                    <label>Codigo de Red</label>
                    <select  class="form-group" name="codigo_red">
                       
                    </select>
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