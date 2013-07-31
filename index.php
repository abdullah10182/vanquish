<?php
//cookie used to time out like box
setcookie("Vanquish_VisitedCookie", "recurring_visitor", time()+2592000);  /* expire in 30 days */
?>

<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

   $path_slide = $_SERVER['DOCUMENT_ROOT'];
   $path_slide .= "/templates/slideshow.php";
   include_once($path_slide); 
 ?>


    <div id="loading" style=" z-index:-1; margin: 20% auto 0; width: 220px; position: absolute; left:50%; margin-left:-110px;"><span><img src='/img/generic/ajax-loader.gif'></span>loading...</div>
      <div id="controls">
            <div class="hide_control">Full Screen</div>
            <div class="pause">pause</div>
            <div class="play">play</div>
           <?php if (($ie) && ($ie_10)) {?>
           <div class="prev">prev</div>
            <div class="next">next</div>
            <?php } 
            else if (!$ie) {?> 
            <div class="prev">prev</div>
            <div class="next">next</div>
            <?php } ?>
            <div class="counter"></div>
        </div>


  <!--Services Section-->
  <section id="services" class="three-boxes-front">
      
    <div class="container">
      <div class="row-fluid">
        
        <!--Service Section One-->
        <div class="span4 text-center service-box">
          <a href="/pages/about.php?page=about">
             <img src="img/generic/design-icon.png">
            <h2>Innovative &</br> Graceful Design</h2>
            <p>Vanquish Yachts works together with the best yacht designers and interior architects to provide a unique product.</p>
          </a>
        </div>
        
        <!--Service Section Two-->
        <div class="span4 text-center service-box">
          <a href="/pages/about.php?page=about">
            <img src="img/generic/saling-icon.png">
            <h2>Passion for </br>Performance</h2>
             <p>High tech engineering translating into fast, adaptable and fuel efficient yachts. </p>
          </a>
        </div>
        
        <!--Service Section Three-->
        <div class="span4 text-center service-box">
          <a href="/pages/about.php?page=about">
             <img src="img/generic/material-icon.png">
            <h2>Superior Material</br> Characteristics</h2>
            <p>Latest manufacturing techniques using seaworthy aluminum and high quality carbon fiber.</p>
          </a>
        </div>
        

      </div>
    </div>
  </section>
   

  <!--hand built-->
  <section id="well">
    <div class="well well-large">
      <div class="container">
        <div class="row-fluid">

            <h3><strong>Luxury Yachts</strong> - <span><em>Hand Built In Holland.</em></span></h3>

        </div>
      </div>
    </div>
  </section>
  


    
  

    <?php /*
  
  <!--Message Section-->
  <section id="message">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 text-center">
          <h2>Where Innovation Meets Perfection.</h2>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--glasses front page-->
  <section id="clients"> 
        <img src="img/generic/glasses.jpg" >
  </section>
  */ ?>
  

   	

 <?php /*

//////////////////
//TMP landing overlay image
/////////////////////

	if ((isset($_COOKIE['Vanquish_VisitedCookie'])) != 'recurring_visitor')  {
?>
    
  <script>
    $(document).ready(function() {

       window.setTimeout(likebox,4000);

       var likecode ='<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FVanquishYachts&amp;width=292&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px;" allowTransparency="true"></iframe>';
       likecode += "<h3 class=\"like-text\">Give Us A Like! <br /> Or check out our <br/> Facebook page.</h3>";
     function likebox(){
          $.colorbox({html:likecode, speed:"2000", opacity:".5", transition:"elastic",onLoad:function(){ window.setTimeout(likeboxclose,10000);}}); 
       
         }
         
         function likeboxclose() {
           $.colorbox.close();   
         }

    });
    
  </script>  
  
  <?php
	} 
	
*/ ?>




    	<script type="text/javascript">

  	
		$(function(){

		$.mbBgndGallery.buildGallery({
				//containment:"#wrapper",
                                containment:"body",
                                <?php if (($ie == false)||($ie_10==true)) { ?>			
                                   effect:{enter:{transform:"scale("+(1+ Math.random()*2)+")",opacity:0},exit:{transform:"scale("+(Math.random()*2)+")",opacity:0}},
                                <?php } ?>
				timer:7000,
				effTimer:3000,
				controls:"#controls",
				raster:"img/generic/raster.png",
                                autoStart: true,
                                shuffle: true,
				images:[
					"img/slides/slide-01.jpg",
                                        "img/slides/slide-02.jpg",
                                        "img/slides/slide-03.jpg",
                                        "img/slides/slide-04.jpg",
                                        "img/slides/slide-05.jpg",        
                                        "img/slides/slide-06.jpg",        
                                        "img/slides/slide-07.jpg"     
				],
                                
				onStart:function(opt){ showServicesBlocks();},
                                onPlay:function(opt){$("#loading").hide(); }
			})

		
		});
	</script>

  
 