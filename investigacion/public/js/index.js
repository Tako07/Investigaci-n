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


    autoplay();
     //TODO Eventos NEXT Y PREVIOUS
     $('#next').click(function(){
        $('.carousel').carousel('next');
     });
     $('#previous').click(function(){
        $('.carousel').carousel('prev');
     });
});
 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 4500);
 }
$("#marca").change(cons2);
function cons2(){
    const marcas = $('#marca').val();
      $.ajax({
          url:"server/consulta.php?mi_id="+marcas,
          method: "POST",
          dataType:"text",
          success: function (data) {
            const contenido=document.getElementById('desc');
            contenido.innerHTML=data;
          }
      });
  }
  $("#ordenar").change(cons3);
function cons3(){
    const orden = $('#ordenar').val();
      $.ajax({
          url:"server/consulta_ordenar.php?mi_id="+orden,
          method: "POST",
          dataType:"text",
          success: function (data) {
            const contenido=document.getElementById('desc');
            contenido.innerHTML=data;
          }
      });
  }
 

