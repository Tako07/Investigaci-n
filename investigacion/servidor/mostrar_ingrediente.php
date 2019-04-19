<?php
include "dbconnection.php";
mysqli_set_charset($conn,'utf8' );

$mi_consulta="SELECT * FROM ingrediente ORDER BY caducidad";
$result=mysqli_query($conn, $mi_consulta);
	 while($row = mysqli_fetch_assoc($result))
            {
        		echo '<div class="row">';
            	echo '<div class="col s6 m3">';
		        echo '  <p class="left-align"><img src="public/images/'.$row["imagen"].'" height="200" width="300" ></p>';
		    	echo '</div>';
		    	echo '<div class="col m3">';
		    	echo '  <p><b>Nombre:</b></p>';
		    	echo '  <p>'.$row["nombre"].'</p>';
		    	echo '  <p><b>Precio:</b></p>';
		    	echo '  <p>'.$row["precio"].'</p>';
		    	echo '</div>';
		    	echo '<div class="col m3">';
		    	echo '  <p><b>Fecha de compra:</b></p>';
		    	echo '  <p>'.$row["compra"].'</p>';
		    	echo '  <p><b>Fecha de caducidad:</b></p>';
		    	echo '  <p>'.$row["caducidad"].'</p>';
		    	echo '</div>';
		    	echo '<div class="col m3">';
		    	echo '  <p><b>Cantidad:</b></p>';
		    	echo '  <p>'.$row["cantidad"].'</p>';
		    	echo '</div>';
		    	echo '</div>';
             
            }
?>