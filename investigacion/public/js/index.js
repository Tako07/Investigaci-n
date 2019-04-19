$(document).ready(function(){


     $('.carousel').carousel({
     	duration:500, 
     	dist: -100,
     	shift:10,
     	indicators: true,
        fullWidth:true
     });
     
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.tabs').tabs();
    $('.datepicker').datepicker({
      format:'yyyy-mm-dd'
    });

    autoplay();
     //TODO Eventos NEXT Y PREVIOUS
     $('#next').click(function(){
        $('.carousel').carousel('next');
     });
     $('#previous').click(function(){
        $('.carousel').carousel('prev');
     });
     $.ajax({
            url:"servidor/mostrar_ingrediente.php",
            method: "POST",
            dataType:"text",
            success: function (data) {
              const contenido=document.getElementById('mostrar_ing');
              contenido.innerHTML=data;
            }
         });
});
 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 4500);
 }
$('#boton_agregar').click(function() {
    
      const nombre = $('#nombre').val();
      const imagen = $('#imagen').val();
      const fecha_cad = $('#fecha_cad').val();
      const fecha_com = $('#fecha_com').val();
      const cantidad = $('#cantidad').val();
      const precio = $('#precio').val();
      var correct=true;
      if(nombre.length==0)
        correct=false;
      if(imagen.length==0)
        correct=false;
      if(fecha_cad.length==0)
        correct=false;
      if(fecha_com.length==0)
        correct=false;
      if(cantidad.length==0)
        correct=false;
      if(precio.length==0)
        correct=false;

      if (correct==true){
         $.ajax({
            url:"servidor/nuevo_ingrediente.php",
            method: "POST",
            dataType:"text",
            data:{nombre:nombre,imagen:imagen,fecha_cad:fecha_cad,fecha_com:fecha_com,cantidad:cantidad,precio:precio},
            success: function (data) {
              alert(data);
              window.location.href = "index.php";
            }
         });
      }else{
        alert("Faltan campos por completar");
      }
   });
 

