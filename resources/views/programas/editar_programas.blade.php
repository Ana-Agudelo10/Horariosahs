@extends('pagina_principal')
@section('titulo', 'Programas')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('programas.actualizar' , [ 'codigo_programa' =>$mostrar->codigo_programa])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Programas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_programa}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Nombre del Programa</label>

                            <input type="text" class="form-control" name="nombre"  value="{{$mostrar->nombre}}" required>

                    </div>
                    <div class="form-group">
                    <label>Verion del Programa</label>
                        <input type="number" name="version_programa" value="{{$mostrar->version_programa}}">

                    </div>
                    <label>Nivel de Formacion</label>
                    <select  class="form-group" name="nivel_formacion">

                            <option
                            @if ($mostrar->nivel_formacion='TÉCNICO')
                        @selected(true)
                            @endif
                            value="TÉCNICO">TÉCNICO</option>

                            <option value="TECNÓLOGO"
                            @if ($mostrar->nivel_formacion='TECNÓLOGO')
                        @selected(true)
                            @endif
                            >TECNÓLOGO</option>
                    </select>

                    <div class="form-group">
                        <label>Codigo area</label>
                        <select  class="form-group" name="codigo_area">

                            <option
                            @foreach ($area as $item)
                            @if ($item->codigo_area==$mostrar->codigo_area)
                            @selected(true)
                            @endif
                            @endforeach

                            value="{{$item->codigo_area}}">{{$item->nombre}}</option>

                        </select>
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
