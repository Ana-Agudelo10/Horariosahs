@extends('pagina_principal')
@section('titulo', 'Fichas')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('fichas.actualizar' , [ 'nro_ficha' =>$mostrar->nro_ficha])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Ficha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->nro_ficha}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Jornada</label>
                        <select class="form-group" name="jornada">

                                <option
                                @if ($mostrar->jornada='MAÑANA')
                            @selected(true)
                                @endif
                                value="MAÑANA">MAÑANA</option>
                                <option value="TARDE"
                                @if ($mostrar->jornada='TARDE')
                            @selected(true)
                                @endif
                                >TARDE</option>

                        </select>
                    </div>
                    <label>Programa</label>
                    <select  class="form-group" name="codigo_programa">
                        @foreach ($programas as $item)
                            <option
                            @if ($item->codigo_programa=$mostrar->codigo_programa)
                                @selected(true)
                            @endif
                            value="{{ $item->codigo_programa }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Tipo de Formacion</label>
                    <select  class="form-group" name="codigo_tipo_form">
                        @foreach ($tiposformacion as $item)
                            <option
                            @if ($item->codigo_tipo_form=$mostrar->codigo_tipo_form)
                                @selected(true)
                            @endif
                            value="{{ $item->codigo_tipo_form }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label>Estado</label>
                        <select  class="form-group" name="estado">
                            <option
                            @if ($mostrar->estado='1')
                            @selected(true)
                                @endif
                            value="1">Activo</option>
                            <option
                            @if ($mostrar->estado='0')
                            @selected(true)
                                @endif
                            value="0">inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cantidad de Aprendices</label>
                        <input type="number" class="form-control" name="cant_aprendices" value="{{$mostrar->cant_aprendices}}" required>
                    </div>
                    <div class="form-group">
                        <h6>{{$mostrar->fecha_inicio  }}</h6>
                        <label>Fecha de Inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio"  value="{{$mostrar->fecha_inicio}}" required >
                    </div>

                    <div class="form-group">
                        <label>Fecha de Fin</label>
                        <input type="date" class="form-control" name="fecha_fin" value="{{$mostrar->fecha_fin}}" required>
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
