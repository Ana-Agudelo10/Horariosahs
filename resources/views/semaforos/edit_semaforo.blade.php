@extends('forms')
@section('titulo', 'Edicion de Semaforo')
@section('cuerpo')
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE SEMAFOROS</h2>
            </section>
        </section>

        <form action="{{route('guardar_semaforo')}}" class="form_contact">
        @csrf
            <h2>Informacion</h2>
            <div class="user_info">
                <label for="names">Numero de trimestres</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nro_trimestres" required>

                <label for="names">Codigo de programa</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="codigo_programa" required>

                <label for="phone">Codigo de competencia</label>
                <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
                <input type="text" name="codigo_com" required>

                <label for="phone">Codigo de resultado</label>
                <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
                <input type="text" name="codigo_resultado" required>

                <label for="phone">Frecuencia horaria</label>
                <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
                <input type="text" name="frecuencia_horaria" required>

                <input type="submit" value="Enviar">
            </div>
        </form>

    </section>
    
@endsection