@extends('pagina_principal')
@section('titulo', 'Ambientes')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('ambientes.actualizar' , [ 'nro_ambiente' =>$mostrar->nro_ambiente])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Ambiente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->nro_ambiente}}</h2>
                    </div>
                
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="number" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
                    </div>

                    <div class="form-group">
                        <label>Especializacion</label>
                        <input type="text" class="form-control" name="especializacion" value="{{$mostrar->especializacion}}" required>
                    </div>

                    <div class="form-group">
                        <label>Numero de Elementos</label>
                        <input type="number" class="form-control" name="nro_elementos" value="{{$mostrar->nro_elementos}}" required>
                    </div>

                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$mostrar->descripcion}}" required>
                    </div>

                    <label>Centro de Formacion</label>
                    <select  class="form-group" name="codigo_centro">
                        @foreach ($sedes as $item)
                            <option
                            @if ($item->codigo_centro=$mostrar->codigo_centro)
                                @selected(true)
                            @endif
                            value="{{ $item->codigo_centro }}">{{ $item->nombre }}</option>
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
@endsection
