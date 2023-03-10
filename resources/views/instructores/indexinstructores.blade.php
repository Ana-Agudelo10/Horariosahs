
@extends('pagina_principal')
@section('titulo', 'instructores')
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
                            <th>Documento</th>
                            <th>Nombre Completo</th>
                            <th>telefono</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Tiempos</th>
                            <th>red</th>

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
                                <td>{{ $item->tipo_documento }} : {{$item->nro_documento}}</td>
                                <td>{{ $item->nombre }} {{ $item->apellido }}</td>
                                <td>{{ $item->telefono  }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ( $item->estado==0 )
                                        INACTIVO
                                    @else
                                        ACTIVO
                                    @endif
                                </td>
                                <td>{{ $item->tiempos }}</td>
                                <td>
                                    @foreach ($reds as $red )
                                    @if ($item->codigo_red==$red->codigo_red)
                                    {{$red->nombre}}
                                    @endif
                                    @endforeach

                                </td>

                                <td>
                                    <a href="{{route('instructores.editar',"pan=".$item->nro_documento)}}" class="edit" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="{{route('instructores.eliminar',$item->nro_documento)}}" class="delete" data-toggle="modal"><i
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
                <form method="post" action="{{route('instructores.crear')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Istructor</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
{{-----------------------------------------------------------------------------------------------------------------------------------}}
                        <select  class="form-group" name="tipo_documento">
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>

                        <div class="form-group">
                            <label>Numero de documento</label>
                            <input type="number" class="form-control" name="nro_documento" required>

                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="apellido" required>

                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" class="form-control" name="telefono" required>

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>

                        </div>



                        <div class="form-group">
                            <label>Tiempos</label>
                            <input type="number" class="form-control" name="tiempos" required>

                        </div>

                        <label>Area</label>
                        <select  class="form-group" name="codigo_area">
                            @foreach ($areas as $item)
                                <option value="{{ $item->codigo_area }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label>Estado</label>
                            <select  class="form-group" name="estado">
                                <option value="1">Activo</option>
                                <option value="0">inactivo</option>
                            </select>
                        </div>
{{-----------------------------------------------------------------------------------------------------------------------------------}}
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
