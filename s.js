$(document).ready(function() {
  
   $("#drag1").draggable({helper:"clone"});
   $("#drag2").draggable({helper:function(event){return $("<div>Я элемент помощник.</div>")}});

});