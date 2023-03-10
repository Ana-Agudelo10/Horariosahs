@extends('forms')
@section('titulo', 'Creacion de Redes')
@section('cuerpo')
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE REDES</h2>
            </section>
        </section>

        <form action="{{route('guardar_red')}}" class="form_contact">
        @csrf
            <h2>Informacion</h2>
            <div class="user_info">
            <label for="names">Codigo</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="codigo_red" required>

                <label for="names">Nombre</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nombre" required>

                <input type="submit" value="Enviar">
                <a href="{{route('redes')}}">Volver</a>
            </div>
        </form>

    </section>
@endsection