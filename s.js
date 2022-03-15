$(document).ready(function(){

   $("#accordion1").accordion();

$("#accordion1").accordion();
$("#accordion2").accordion();

$("#auto").autocomplete({source:$("#list").text().split("\\n"), minLength:"3"});

$("#el1, #el2").button();
$("#el3").buttonset()
});