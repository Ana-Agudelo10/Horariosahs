<!-- @csrf
<div class="contenedor">
    <h1 class="logo"><span class="nombre-empresa">Acme</span> Servicios</h1>
    <div class="wrapper animated bounceInLeft">
      <div class="info-empresa">
        <h3>Acme Servicios</h3>
        <ul class="servicios">
          <li><i class="fa fa-map-marker"></i> Calle Cualquiera, 44. 88880. Ciudad (Provincia)</li>
          <li><i class="fa fa-mobile"></i> 555 555 000</li>
          <li><i class="fa fa-envelope"></i> info@empresa.com</li>
        </ul>
      </div>
      <div class="contacto">
        <h3>Creacion de</h3>
        <form class="formulario" action="{{route('guardar_sedes')}}"align="center" method="POST">
        <p>
            <label>Nombre</label>
            <span class="text-xs text-red-600">@error('nombre') {{$message}} @enderror</span>
            <input type="text" name="nombre" required>
          </p>
          <p>
            <label>Direccion</label>
            <span class="text-xs text-red-600">@error('direccion') {{$message}} @enderror</span>
            <input type="text" name="direccion">
          </p>
          
          <p class="full">
            <button class="boton-enviar">Enviar</button>
          </p>
        </form>
      </div>
    </div>
  </div> -->