   var slideShowStarted = false;
 /*  
   jQuery(function(){

    jQuery('#camera_wrap_1').camera({
            thumbnails: false,
            pagination: false,
            fx: "scrollBottom", 
            transPeriod: 2000,
            opacityOnGrid: false,
            onEndTransition: function() {
               jQuery('#services').show().animate({bottom:'40px'},1000, function(){
             });  
            }

        });
    
    
    
                    

    });
    


*/

jQuery(function(){

    $('.hide_control').click(function() {
        $("#services").slideToggle(function() {
            if ($('.hide_control').html()=="Hide"){
              $(".hide_control").html("Show");
            }
            else
                $(".hide_control").html("Hide");
        });

    });

});


function showServicesBlocks(){
    // jQuery('#services').show().animate({bottom:'140px'},1000, function(){ }); 
       $('#controls').fadeIn(1000);
 
    if (slideShowStarted==false){
     $('#services').slideDown(1000);
    }
    slideShowStarted = true;
}