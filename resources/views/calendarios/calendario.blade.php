@extends('pagina_principal')
@section('titulo', 'Horario')
@section('cuerpo')
<div class="tabla">
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Adicionar</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>{{--
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>--}}
                            <th>Numero de Ficha</th>
							<th>Codigo Competencia</th>
							<th>Numero de Trimestre</th>
							<th>Codigo Semaforo</th>
							<th>Jornada</th>
							<th>Dia</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de Fin</th>
                            <th>Frecuencia Horaria</th>
                            <th>Nro Ambiente</th>
                            <th>Instructor</th>
							<th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mostrar as $item)
                            <tr>
                                {{--<td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>--}}
                                	<td>{{$item->nro_ficha}}</td>
									<td>{{$item->codigo_com}}</td>
									<td>{{$item->nro_trimestre}}</td>
									<td>{{$item->semaforo}}</td>
									<td>{{$item->jornada}}</td>
									<td>{{$item->dia_semana}}</td>
                                    <td>{{$item->hora_inicio}}</td>
                                    <td>{{$item->hora_fin}}</td>
                                    <td>{{$item->frecuencia_horaria}}</td>
                                    <td>{{$item->nro_ambiente}}</td>
                                    <td>{{$item->nro_documento}}</td>
								<td>
                                    <a href="{{route('calendario.editar',"id=".$item->id)}}" class="edit" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="{{route('calendario.eliminar',$item->id)}}" class="delete" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Borrar">&#xE872;</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('calendario.crear')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Horario</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label>Ficha</label>
                        <select  class="form-group" name="nro_ficha">
                            @foreach ($mostrarficha as $item)
                                <option value="{{ $item->nro_ficha}}">{{ $item->nro_ficha}}</option>
                            @endforeach
                        </select>

                        <label>Competencia</label>
                        <select  class="form-group" name="codigo_com">
                            @foreach ($mostrarcompetencia as $item)
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

                        <label>Semaforo del Programa</label>
                        <select  class="form-group" name="semaforo">
                            @foreach ($mostrarsemaforo as $item)
                                <option value="{{ $item->semaforo}}">{{ $item->codigo_programa}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                        <label>Jornada</label>
                            <select class="form-group" name="jornada">

                                    <option value="MAÑANA">MAÑANA</option>
                                    <option value="TARDE" >TARDE</option>
                                    <option value="FINES DE SEMANA">FINES DE SEMANA</option>
                                   
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
                            @foreach ($mostrarambiente as $item)
                                <option value="{{ $item->nro_ambiente}}">{{ $item->nombre}} {{ $item->apellido}}</option>
                            @endforeach
                        </select>

                        <label>Instructor</label>
                        <select  class="form-group" name="nro_documento">
                            @foreach ($mostrarinstructor as $item)
                                <option value="{{ $item->nro_documento}}">{{ $item->nombre}} {{ $item->apellido}}</option>
                            @endforeach
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
    <!-- Delete Modal HTML -->
   {{-- <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Deshabilitar Horario</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>¿Está seguro de que desea eliminar estos registros?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    --}}
<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false); //esto hace que se seleccionen todas si la casilla superior esta seleccionada
            }
        });
    });
</script>
@endsection

