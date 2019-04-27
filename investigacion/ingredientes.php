<?php
  include_once 'navbar.html';
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>X</title>
   <link type="text/css" rel="stylesheet" href="public/css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="row">
      <div class="col s1"></div>
      <div class="card col s10">
      <h3>Registrar Ingredientes</h3>
      <div class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input placeholder="Nombre" id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        <div class="col s12 m6">
               <div class = "file-field input-field">
                  <div class = "btn brown">
                     <span>Elegir</span>
                     <input type = "file" />
                  </div>
                  
                  <div class = "file-path-wrapper">
                     <input id="imagen" class = "file-path validate" type = "text"
                        placeholder = "Seleccionar Imagen" />
                  </div>
               </div>
            
        </div>
      </div>
    <div class="row">
      
        <div class="input-field col s12 m6">
          <input id="fecha_com" type="text" class="datepicker">
          <label for="fecha_com">Fecha de compra</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="fecha_cad" type="text" class="datepicker">
          <label for="fecha_cad">Fecha de Caducidad</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6">
          Cantidad de producto:
          <div class="input-field inline">
            <input id="cantidad" type="number" class="validate">
            <label for="cantidad">Cantidad</label>
          </div>
        </div>
        <div class="col s12 m6">
          Precio del producto:
          <div class="input-field inline">
            <input id="precio" type="number" class="validate">
            <label for="precio">Precio</label>
          </div>
        </div>
        <div class="center-align col s12">
          <button id="boton_agregar" class="btn brown">Agregar Ingrediente
            <i class="material-icons right">send</i>
          </button>
        </div>   
         
      </div>
    </div>
    </div>
    <div class="col s1"></div>
    </div>
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/materialize.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
<?php
  include_once 'footer.html';
?>
