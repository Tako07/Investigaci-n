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
            dataType:"json",
            success: function (data) {
              console.log(data);
              for (var i = 0; i < data.length; i++) {
                $('#mostrar_ing').append('<div class="row" id="iding'+data[i]['id']+'"><div class="col s12 m3"><p class="left-align"><img src="public/images/'+data[i]['imagen']+'" height="200" width="300" ></p></div> <div class="col s6 m3"><p><b>Nombre:</b></p><p>'+data[i]['nombre']+'</p><p><b>Precio:</b></p><p>'+data[i]['precio']+'</p></div><div class="col s6 m3"><p><b>Fecha de compra:</b></p><p>'+data[i]['compra']+'</p><p><b>Fecha de caducidad:</b></p><p>'+data[i]['caducidad']+'</p></div><div class="col m3"><p><b>Cantidad:</b></p><p>'+data[i]['cantidad']+'</p></div></div>');
              
              }
              for (var i = 0; i < data.length; i++) {
              $('#iding'+data[i]['id']).click(function() {
              alert("we"+i);
              });
            }
            }
         });
    
});
 

 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 4500);
 }
 function hola(){
    alert("hola");
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
              alert("agregado");
              window.location.href = "index.php";
            }
         });
      }else{
        alert("Faltan campos por completar");
      }
   });
 

