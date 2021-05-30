$(document).ready(function(){

jQuery( "#form_puntuacion" ).validate({
        rules:{
            titulo_op:{
                required:true
            },
            opinion:{
                required:true
            }
        },
        messages:{
        },
        errorElement:'span'
   });
   $("#guardar_opinion").click(function(e){
        e.preventDefault()
        if($("#form_puntuacion").valid())
        {
            if( $("#form_puntuacion input[name='estrellas']:radio").is(':checked')) 
            {
                $("#form_puntuacion").submit();
            }else
            {
                $("#fail").html("Puntuación obligatoria"); 
            }
           
        }
   });
});