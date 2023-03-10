@extends('forms')
@section('titulo', 'Creacion de Areas')
@section('cuerpo')
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE AREA</h2>
            </section>
        </section>

        <form action="{{route('guardar_area')}}" class="form_contact" name=>
        @csrf
            <h2>Informacion</h2>
            <div class="user_info">
                <label for="names">Codigo</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="codigo_area" required>

                <label for="names">Nombre</label>
                <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
                <input type="text" name="nombre" required>

                <label>Red</label>
                <select name="codigo_red">
                    @foreach($mostrar as $item)
                    <option value="{{$item->codigo_red}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
                
                <input type="submit" value="Enviar">
                <a href="{{route('areas')}}">Volver</a>
            </div>
        </form>

    </section>
@endsection