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
var width_browser =  $(window).width();
jQuery(function(){

    $('.hide_control').click(function() {
        $("#services").slideToggle(function() {
            $(".navbar").slideToggle();
            $("#well").slideUp();
            if ($('.hide_control').html()=="Full Screen"){
                console.log('if');
              $(".hide_control").html("Show");
              $("#controls").css("top","10px");
            }
            else if ($('.hide_control').html()=="Show"){
            $(".hide_control").html("Full Screen");
                if (width_browser > 480){
                      $("#well").slideDown();
                }
                $("#controls").css("top","120px");
               
                
          //      if (width_browser < 980) {
                //  $("#controls").css("margin-top","20px");
             //   }
          //      else 
                 //   { $("#controls").css("margin-top","120px");}
          }
        });
        

    });

});


function showServicesBlocks(){
    // jQuery('#services').show().animate({bottom:'140px'},1000, function(){ }); 
    $('#controls').fadeIn(3000);
 
    if (slideShowStarted==false){
     $('#services').slideDown(1000);
    }
    

    slideShowStarted = true;
     
}

jQuery(function(){

    $('.soon').click(function() {
        $("#site_message").html("Comming Soon").slideDown().delay(1500).slideUp();
        

    });

});

