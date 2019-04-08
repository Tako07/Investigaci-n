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
      <div class="col s12 m6 img_pedido">
    	  <a><img class="left responsive-img" src="public/images/hamburguesa1.jpeg" ></a>
      </div>
      <div class="col s12 m6">
        <h3><strong>Hamburguesa Rancia</strong></h3>
        <div class="row">
          <div class="col s12 l6">
            <h4><strong>Ingredientes</strong></h4>
            <p>Pan verde de las colinas de zacatecas <br>
              Rabanos Estelares<br>
              Lechuga <br>
              Play-do Rosa <br>
              Carne de Cimarron <br>
              Cebolla en Escabeche</p>
            <h4><strong>Precio</strong></h4>
            <p>$25 Pesitos</p>
          </div>
          <div class="col s12 l6">
            <h4><strong>Tiempo de preparación</strong></h4>
            <p>De 10 a 15 minutos</p>
            <a href="#" class="waves-effect btn-large brown darken-2 center-align">Comprar</a>
          </div>
        </div>
        
      </div>
    </div>
    <div class="botones">
      <button id="next">Next</button>
      <button id="previous">Previous</button>
    </div>

     <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/materialize.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
<?php
  include_once 'footer.html';
?>
