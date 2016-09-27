$(document).ready(function(){
    $.getJSON( "getList.php", function( data ) {
        console.log(data);
      //  $( "#contentDiv").html(data[0].ID);
      
        $( "#left").html(data[0].ID);
        $( "#right").html(data[0].ID);
        $( "#center").html(data[0].ID);
      //  $( "#contentDiv2").html(data[0].nombre);
        $( "#ezker").html(data[1].ID);
        $( "#eskubi").html(data[1].ID);
        $( "#erdi").html(data[1].ID);
        
        
    });
});