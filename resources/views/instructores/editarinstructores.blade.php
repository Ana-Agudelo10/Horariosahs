
@extends('pagina_principal')
@section('titulo', 'Instructores')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('instructores.actualizar',['instructor'=>$mostrar->nro_documento])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Instructor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <h2>{{ $mostrar->tipo_documento }} : {{$mostrar->nro_documento}}</h2>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="{{$mostrar->apellido}}" required>

                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" name="telefono" value="{{$mostrar->telefono}}" required>

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$mostrar->email}}" required>

                    </div>



                    <div class="form-group">
                        <label>Tiempos</label>
                        <input type="number" class="form-control" name="tiempos" value="{{$mostrar->tiempos}}" required>

                    </div>

                    <label>Area</label>
                    <select  class="form-group" name="codigo_area">
                        @foreach ($areas as $item)
                            <option
                            @if ($item->codigo_area=$mostrar->codigo_area)
                                @selected(true)
                            @endif
                            value="{{ $item->codigo_area }}">{{ $item->nombre }}</option>
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
