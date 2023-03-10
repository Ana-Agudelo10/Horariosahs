@extends('pagina_principal')
@section('titulo', 'Programas')
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
                            <th>Codigo del Programa</th>
                            <th>Nombre</th>
                            <th>Version</th>
                            <th>Nivel de Formacion</th>
                            <th>Codigo Area</th>
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
                                <td>{{ $item->codigo_programa}}</td>
                                <td>{{ $item->nombre}}</td>
                                <td>{{ $item->version_programa }}</td>
                                <td>{{ $item->nivel_formacion }}</td>
                                <td>{{ $item->codigo_area }}</td>
                                <td>
                                    <a href="{{route('programas.editar',"pan=".$item->codigo_programa)}}" class="edit" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="{{route('programas.eliminar',$item->codigo_programa)}}" class="delete" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('programas.crear')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Programas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Codigo del Programa</label>
                            <input type="text" class="form-control" name="codigo_programa" required>

                        </div>
                        <div class="form-group">
                            <label>Nombre del Programa</label>
                            <select class="form-group" name="nombre">

                                    <option value="ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION">ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</option>
                                    <option value="ANÁLISIS Y DESARROLLO DE SOFTWARE" >ANÁLISIS Y DESARROLLO DE SOFTWARE</option>
                                    <option value="IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES">IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES</option>
                                    <option value="ANIMACION DIGITAL">ANIMACION DIGITAL</option>
                                    <option value="PROGRAMACIÓN PARA ANALÍTICA DE DATOS">PROGRAMACIÓN PARA ANALÍTICA DE DATOS</option>
                                    <option value="SISTEMAS">SISTEMAS</option>
                                    <option value="INSTALACIÓN DE REDES DE COMPUTADORES">INSTALACIÓN DE REDES DE COMPUTADORES</option>
                                    <option value="CONTROL DE LA SEGURIDAD DIGITAL">CONTROL DE LA SEGURIDAD DIGITAL</option>
                                    <option value="PROGRAMACIÓN DE SOFTWARE">PROGRAMACIÓN DE SOFTWARE</option>
                                    <option value="MANTENIMIENTO DE EQUIPOS DE COMPUTO">MANTENIMIENTO DE EQUIPOS DE COMPUTO</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label>Version del Programa</label>
                        <select  class="form-group" name="version_programa">

                        </select>
                        </div>

                        <div class="form-group">
                            <label>Nivel de Formacion</label>
                            <select  class="form-group" name="nivel_formacion">
                                <option value="TÉCNICO">TÉCNICO</option>
                                <option value="TECNÓLOGO">TECNÓLOGO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Codigo Area</label>
                            <input type="number" class="form-control" name="codigo_area" required>
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
    <!-- Edit Modal HTML -->

    <!-- Delete Modal HTML -->
   {{-- <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Deshabilitar Ficha</h4>
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