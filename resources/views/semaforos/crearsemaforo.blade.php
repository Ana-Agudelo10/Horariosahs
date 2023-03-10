@extends('forms')
@section('titulo', 'Creacion de Semaforo')
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
                <label for="names">Numero de trimestre</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="number" name="nro_trimestre" required>

                <label>Programa</label>
                <select name="codigo_programa">
                @foreach($mostrar as $item)
                    <option value="{{$item->codigo_programa}}">{{$item->nombre}}</option>
                @endforeach
                </select>

                <label>Competencia</label>
                <select name="codigo_com">
                @foreach($mostrardos as $item)
                    <option value="{{$item->codigo_com}}">{{$item->nombre}}</option>
                @endforeach
                </select>

                <label>Resultado</label>
                <select name="codigo_resultado">
                @foreach($mostrartres as $item)
                    <option value="{{$item->codigo_resultado}}">{{$item->nombre}}</option>
                @endforeach
                </select>

                <label for="phone">Frecuencia horaria</label>
                <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
                <input type="text" name="frecuencia_horaria" required>

                <input type="submit" value="Enviar">
                <a href="{{route('sedes')}}">Volver</a>
            </div>
        </form>

    </section>
    
@endsection