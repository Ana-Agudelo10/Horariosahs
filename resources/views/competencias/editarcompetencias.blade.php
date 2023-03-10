
@extends('pagina_principal')
@section('titulo', 'Fichas')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('competencia.actualizar' , [ 'codigo_com' =>$mostrar->codigo_com])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Competencia</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_com}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="number" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
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
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
