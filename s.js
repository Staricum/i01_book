$(document).ready(function(){

$(document).ready(function(){

$("#el1").resizable().draggable({revert:true});

$("#sort1").sortable();

$("#el2,#el3").draggable({revert:true});

$("#drop1").droppable({accept:"#el2,#el3",
drop:function(event,ui){ui.draggable.css("display","none");
$("#drop1").css("background-color","green");}});

$("#drop2").droppable({accept:"#el3", drop:function(){
$("#el3").css("display","none");
$("#drop2").css("background-color","green");}});
});

});