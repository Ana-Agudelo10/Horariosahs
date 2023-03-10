@extends('pagina_principal')
@section('titulo', 'Ambientes')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('ambientes.actualizar' , [ 'nro_ambiente' =>$mostrar->nro_ambiente])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Horario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->id}}</h2>

                    </div>
                
                        <label>Ficha</label>
                        <select  class="form-group" name="nro_ficha">
                            @foreach ($mostrar as $item)
                                <option value="{{ $item->nro_ficha}}">{{ $item->nombre}}</option>
                            @endforeach
                        </select>

                        <label>Competencia</label>
                        <select  class="form-group" name="codigo_com">
                            @foreach ($mostrar as $item)
                                <option value="{{ $item->codigo_com}}">{{ $item->nombre}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                        <label>Numero del Trimestre</label>
                            <select class="form-group" name="nro_trimestre">

                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Semaforo del programa</label>
                            <input type="text" class="form-control" name="semaforo" required>
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
                                <option value="FINES DE SEMANA"
                                @if ($mostrar->jornada='FINES DE SEMANA')
                            @selected(true)
                                @endif
                                >FINES DE SEMANA</option>

                        </select>
                    </div>

                        <div class="form-group">
                        <label>Dia de la semana</label>
                            <select class="form-group" name="jornada">

                                    <option value="LUNES">LUNES</option>
                                    <option value="MARTES" >MARTES</option>
                                    <option value="MIERCOLES">MIERCOLES</option>
                                    <option value="JUEVES" >JUEVES</option>
                                    <option value="VIERNES">VIERNES</option>
                                    <option value="SABADO" >SABADO</option>
                                    <option value="DOMINGO" >DOMINGO</option>

                            </select>
                        </div> 

						<div class="form-group">
                            <label>Hora Inicio</label>
                            <input type="time" class="form-control" name="hora_inicio" required>
                        </div>

                        <div class="form-group">
                            <label>Hora Fin</label>
                            <input type="time" class="form-control" name="hora_fin" required>
                        </div>

                        <div class="form-group">
                        <label>Frecuencia Horaria</label>
                            <select class="form-group" name="frecuencia_horaria">

                                    <option value="01">1</option>
                                    <option value="02" >2</option>
                                    <option value="03">3</option>
                                    <option value="04" >4</option>
                                    <option value="05">5</option>
                            </select>
                        </div> 

                        <label>Ambiente</label>
                        <select  class="form-group" name="nro_ambiente">
                            @foreach ($mostrar as $item)
                                <option value="{{ $item->nro_ambiente}}">{{ $item->nombre}} {{ $item->apellido}}</option>
                            @endforeach
                        </select>

                        <label>Instructor</label>
                        <select  class="form-group" name="nro_documento">
                            @foreach ($mostrar as $item)
                                <option value="{{ $item->nro_documento}}">{{ $item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
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
