
@extends('pagina_principal')
@section('titulo', 'Resultados')
@section('cuerpo')
{{--<div id="addEmployeeModal" class="modal fade"> necesito ver los estilos y el javascript de esto--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('resultados.actualizar' , [ 'codigo_resultado' =>$mostrar->codigo_resultado])}} ">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Resultado</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h2>{{$mostrar->codigo_resultado}}</h2>

                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="number" class="form-control" name="nombre" value="{{$mostrar->nombre}}" required>
                    </div>
                    <label>Competencia</label>
                    <select  class="form-group" name="codigo_com">
                        @foreach ($competencias as $item)
                            <option
                            @if ($item->codigo_com=$mostrar->codigo_com)
                                @selected(true)
                            @endif
                            value="{{ $item->codigo_com}}">{{ $item->nombre }}</option>
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
