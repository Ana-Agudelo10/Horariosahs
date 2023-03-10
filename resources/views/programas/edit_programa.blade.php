@extends('forms')
@section('titulo', 'Editacion de Programa')
@section('cuerpo')
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE PROGRAMA</h2>
            </section>
        </section>

        <form action="{{route('guardar_programa)}}" class="form_contact">
        @csrf
            <h2>Informacion</h2>
            <div class="user_info">
                <label for="names">Codigo del Programa</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="number" name="codigo_programa" required>

                <label for="names">Nombre</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nombre" required>

                <label for="names">Version del Programa</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="version_programa" required>

                <label for="names">Nivel de Formacion</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nivel_formacion" required>

                <label>Area</label>
                <select name="codigo_area">
                @foreach($mostraras $item)
                    <option value="{{$item->codigo_area}}">{{$item->nombre}}</option>
                @endforeach
                </select>

                <input type="submit" value="Enviar">
                <a href="{{route('programas')}}">Volver</a>
            </div>
        </form>

    </section>

@endsection
