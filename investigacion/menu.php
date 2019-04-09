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
   <link rel="stylesheet" href="public/css/estilos.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s2"><a style="color:#795548"; href="#test1">Lunes</a></li>
          <li class="tab col s2"><a style="color:#795548"; class="active" href="#test2">Martes</a></li>
          <li class="tab col s2"><a style="color:#795548"; href="#test3">Miércoles</a></li>
          <li class="tab col s2"><a style="color:#795548"; href="#test4">Jueves</a></li>
          <li class="tab col s2"><a style="color:#795548"; href="#test4">Viernes</a></li>
          <li class="tab col s2"><a style="color:#795548"; href="#test4">Sábado</a></li>
        </ul>
      </div>
      <div id="test1" class="row col s12">
         <div class="col m2">
              <a href="compra.php"><img class="left responsive-img" src="public/images/hamburguesa1.jpeg" height="200" width="200" ></a>
          </div>
          <div class="col m2">
              <p><strong>Hamburgruesa</strong><br>
              Está bien sabrosonga <br>
              <strong>Descripción</strong><br>
              Lleva pitomate <br>
              y cebolla<br>
              </p>
          </div>
          <div class="col m2">
              <a href="compra.php"><img class="left responsive-img" src="public/images/Sincr.jpg" height="200" width="200" ></a>
          </div>
          <div class="col m2">
              <p><strong>Hamburgruesa</strong><br>
              Está bien sabrosonga <br>
              <strong>Descripción</strong><br>
              Lleva pitomate <br>
              y cebolla<br>
              </p>
          </div>
          <div class="col m2">
              <a href="compra.php"><img class="left responsive-img" src="public/images/torta1.jpg" height="200" width="200" ></a>
          </div>
          <div class="col m2">
              <p><strong>Hamburgruesa</strong><br>
              Está bien sabrosonga <br>
              <strong>Descripción</strong><br>
              Lleva pitomate <br>
              y cebolla<br>
              </p>
          </div>
      </div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test3" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>

     <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/materialize.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
<?php
  include_once 'footer.html';
?>
