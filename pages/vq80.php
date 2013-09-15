<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>
  <!-- header image -->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-07.jpg" >
  </section>
  
  <!--Main Content-->
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          
          <!--Bread Crumbs-->
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Our Boats</a> <span class="divider">/</span></li>
            <li class="active">Vanquish VQ80</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <h1>Vanquish VQ80</h1>
        </div>
      </div>
      
  
    <div class="row-fluid">
    <div class="span8" style="position:relative;">

         <div class="camera_wrap camera_ash_skin" id="camera2">
      
         <div class="product_image" data-thumb="/img/products/vq80/vq80-side-view-t.jpg" data-src="/img/products/vq80/vq80-side-view.jpg" >
             <div class="camera_caption fadeFromBottom">
             Side view <a href="/img/products/vq80/vq80-side-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
             </div>
         </div>
      
          <div class="product_image" data-thumb="/img/products/vq80/vq80-top-view-t.jpg" data-src="/img/products/vq80/vq80-top-view.jpg" >
             <div class="camera_caption fadeFromBottom">
             Top view<a href="/img/products/vq80/vq80-top-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
             
         <div class="product_image" data-thumb="/img/products/vq80/vq80-view-01-t.jpg" data-src="/img/products/vq80/vq80-view-01.jpg" >
             <div class="camera_caption fadeFromBottom">
             VQ80<a href="/img/products/vq80/vq80-view-01-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
             
         <div class="product_image" data-thumb="/img/products/vq80/vq80-view-02-t.jpg" data-src="/img/products/vq80/vq80-view-02.jpg" >
             <div class="camera_caption fadeFromBottom">
             VQ80<a href="/img/products/vq80/vq80-view-02-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
             
         <div class="product_image" data-thumb="/img/products/vq80/vq80-view-03-t.jpg" data-src="/img/products/vq80/vq80-view-03.jpg" >
             <div class="camera_caption fadeFromBottom">
             VQ80<a href="/img/products/vq80/vq80-view-03-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
             
         <div class="product_image" data-thumb="/img/products/vq80/vq80-view-04-t.jpg" data-src="/img/products/vq80/vq80-view-04.jpg" >
             <div class="camera_caption fadeFromBottom">
             VQ80<a href="/img/products/vq80/vq80-view-04-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
         
      <?php /*
           <div class="product_image" data-thumb="/img/products/vq80/vq80-top-sec-view-t.jpg" data-src="/img/products/vq80/vq40-top-sec-view.jpg" >
             <div class="camera_caption fadeFromBottom">
            Top view interior <a href="/img/products/vq80/vq80-top-sec-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
*/
      ?>
   
        </div><!-- #camera_wrap_1 -->

   
    

        </div>
        
        <!--Insert Project Details-->
        <div class="span4 product_description">
   
          <p>The vanquish VQ model line is an exceptionally  performance motor cruiser, 
              Vanquish provides beautiful, comfortable accommodation for  guests while allowing 
              them to enjoy the excitement of its high top speed. A fully enclosed superstructure 
              creates an indoor living space with all the hallmarks of Vanquish simplicity in design, 
              leading to an aft social and dining space that enables guests to make the most of the
              sea and surroundings. An additional front deck with a big sun deck  area affords guests 
              a degree of relaxing, particularly when in open sea on cruising speed , and provides a
              thrilling vantage point from which to appreciate this boat's awesome dynamics.</p>
          
         <p> All yachts in our VQ line have the latest TDI diesel engines from Mercury. These motors have a low fuel consumption 
             and fast and responsive acceleration with a top speed of 40+ knots</p>
          <br />

        </div>
      </div>
        		
    </div>
  </section>  
  

  

  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
  
<script>
      //Gallery
    $(".product_image").colorbox({ transition:"elastic", width:"80%", opacity:".5"});
    
  
    
        jQuery('#camera2').camera({
                height: '50%',
                loader: false,
                pagination: false,
                thumbnails: true,
                navigation: true,
                playPause: false,
                fx: 'scrollHorz'
  
        });
                    

    </script>