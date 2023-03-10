@extends('pagina_principal')
@section('titulo', 'redes')
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
                            <th>Codigo de la Red</th>
                            <th>Nombre de Red</th>

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

                                <td>{{ $item->codigo_red}}</td>
                                <td>{{ $item->nombre}}</td>

                                <td>
                                    <a href="{{route('redes.editar',"pan=".$item->codigo_red)}}" class="edit" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="{{route('redes.eliminar',$item->codigo_red)}}" class="delete" data-toggle="modal"><i
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
                <form method="post" action="{{route('redes.crear')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar Redes</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
{{-----------------------------------------------------------------------------------------------------------------------------------}}
                        
                        
                        <div class="form-group">
                            <label>Nombre de la Red</label>
                            <select class="form-group" name="nombre">

                                <option value="ACTIVIDAD FISICA, RECREACION Y DEPORTE">ACTIVIDAD FISICA, RECREACION Y DEPORTE</option>
                                <option value="ACUICOLA Y PESCA" >ACUICOLA Y PESCA</option>
                                <option value="AEROESPACIAL">AEROESPACIAL</option>
                                <option value="AGRÍCOLA">AGRÍCOLA</option>
                                <option value="AMBIENTAL">AMBIENTAL</option>
                                <option value="ARTES GRÁFICAS">ARTES GRÁFICAS</option>
                                <option value="ARTESANÍAS">ARTESANÍAS</option>
                                <option value="AUTOMOTOR">AUTOMOTOR</option>
                                <option value="BIOTECNOLOGÍA">BIOTECNOLOGÍA</option>
                                <option value="COMERCIO Y VENTAS">COMERCIO Y VENTAS</option>
                                <option value="CONSTRUCCIÓN">CONSTRUCCIÓN</option>
                                <option value="CUERO, CALZADO Y MARROQUINERÍA" >CUERO, CALZADO Y MARROQUINERÍA</option>
                                <option value="ELECTRÓNICA Y AUTOMATIZACIÓN">ELECTRÓNICA Y AUTOMATIZACIÓN</option>
                                <option value="ENERGÍA ELÉCTRICA">ENERGÍA ELÉCTRICA</option>
                                <option value="GESTIÓN ADMINISTRATIVA Y FINANCIERA">GESTIÓN ADMINISTRATIVA Y FINANCIERA</option>
                                <option value="HIDROCARBUROS">HIDROCARBUROS</option>
                                <option value="HOTELERÍA Y TURISMO">HOTELERÍA Y TURISMO</option>
                                <option value="INFORMATICA, DISEÑO Y DESARROLLO DE SOFTWARE">AUTOMOTOR INFORMATICA, DISEÑO Y DESARROLLO DE SOFTWARE</option>
                                <option value="INFRAESTRUCTURA">INFRAESTRUCTURA</option>
                                <option value="LOGÍSTICA Y GESTIÓN DE LA PRODUCCIÓN">LOGÍSTICA Y GESTIÓN DE LA PRODUCCIÓN</option>
                                <option value="MATERIALES PARA LA INDUSTRIA">MATERIALES PARA LA INDUSTRIA</option>
                                <option value="MECANICA INDUSTRIAL">MECANICA INDUSTRIAL</option>
                                <option value="MINERÍA" >MINERÍA</option>
                                <option value="PECUARIA">PECUARIA</option>
                                <option value="QUÍMICA APLICADA">QUÍMICA APLICADA</option>
                                <option value="SALUD">SALUD</option>
                                <option value="SERVICIOS PERSONALES">SERVICIOS PERSONALES</option>
                                <option value="TELECOMUNICACIONES">TELECOMUNICACIONES</option>
                                <option value="TEXTIL, CONFECCIÓN, DISEÑO Y MODA">TEXTIL, CONFECCIÓN, DISEÑO Y MODA</option>
                                <option value="TRANSPORTE">TRANSPORTE</option>
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
