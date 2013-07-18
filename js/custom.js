
   
   jQuery(function(){

    jQuery('#camera_wrap_1').camera({
            thumbnails: false,
            pagination: false,
            fx: "scrollBottom",
            transPeriod: 2000,
            onEndTransition: function() {
               jQuery('#services').show().animate({bottom:'40px'},1000, function(){
             });  
            }

        });
    
    
    
                    

    });
    




jQuery(function(){

    $('#hide').click(function() {
        $("#services").slideUp();
    });

});