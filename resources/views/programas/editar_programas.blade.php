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
                        <select class="form-group" name="nombre">

                                <option
                                @if ($mostrar->nombre='ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION')
                            @selected(true)
                                @endif
                                value="ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION">ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</option>

                                <option value="ANÁLISIS Y DESARROLLO DE SOFTWARE"
                                @if ($mostrar->nombre='ANÁLISIS Y DESARROLLO DE SOFTWARE')
                            @selected(true)
                                @endif
                                >ANÁLISIS Y DESARROLLO DE SOFTWARE</option>

                                <option
                                @if ($mostrar->nombre='IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES')
                            @selected(true)
                                @endif
                                value="IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES">IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES</option>

                                <option value="ANIMACION DIGITAL"
                                @if ($mostrar->nombre='ANIMACION DIGITAL')
                            @selected(true)
                                @endif
                                >ANIMACION DIGITAL</option>

                                <option
                                @if ($mostrar->nombre='PROGRAMACIÓN PARA ANALÍTICA DE DATOS')
                            @selected(true)
                                @endif
                                value="PROGRAMACIÓN PARA ANALÍTICA DE DATOS">PROGRAMACIÓN PARA ANALÍTICA DE DATOS</option>

                                <option value="SISTEMAS"
                                @if ($mostrar->nombre='SISTEMAS')
                            @selected(true)
                                @endif
                                >SISTEMAS</option>

                                <option
                                @if ($mostrar->nombre='INSTALACIÓN DE REDES DE COMPUTADORES')
                            @selected(true)
                                @endif
                                value="INSTALACIÓN DE REDES DE COMPUTADORES">INSTALACIÓN DE REDES DE COMPUTADORES</option>
                                
                                <option value="CONTROL DE LA SEGURIDAD DIGITAL"
                                @if ($mostrar->nombre='CONTROL DE LA SEGURIDAD DIGITAL')
                            @selected(true)
                                @endif
                                >CONTROL DE LA SEGURIDAD DIGITAL</option>

                                <option
                                @if ($mostrar->nombre='PROGRAMACIÓN DE SOFTWARE')
                            @selected(true)
                                @endif
                                value="PROGRAMACIÓN DE SOFTWARE">PROGRAMACIÓN DE SOFTWARE</option>
                                
                                <option value="MANTENIMIENTO DE EQUIPOS DE COMPUTO"
                                @if ($mostrar->nombre='MANTENIMIENTO DE EQUIPOS DE COMPUTO')
                            @selected(true)
                                @endif
                                >MANTENIMIENTO DE EQUIPOS DE COMPUTO</option>

                        </select>
                    </div>
                    <label>Verion del Programa</label>
                    <select  class="form-group" name="version_programa">
                       
                    </select>
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