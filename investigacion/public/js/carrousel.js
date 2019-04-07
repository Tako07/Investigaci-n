$(document).ready(function(){
   $('.carousel').carousel({
     full_width: true,
     padding:200
   });

autoplay();
 });

 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 4500);
 }
