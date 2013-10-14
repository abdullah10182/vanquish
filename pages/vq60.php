<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>
  <!-- header image -->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-06.jpg" >
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
            <li class="active">Vanquish VQ60</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <h1>Vanquish VQ60</h1>
        </div>
      </div>
      
  
    <div class="row-fluid">
    <div class="span8" style="position:relative;">

         <div class="camera_wrap camera_azure_skin" id="camera2">
      
         <div class="product_image" data-thumb="/img/products/vq60-side-view-t.jpg" data-src="/img/products/vq60-side-view.jpg" >
             <div class="camera_caption fadeFromBottom">
             Side view <a href="/img/products/vq60-side-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
             </div>
         </div>
      
          <div class="product_image" data-thumb="/img/products/vq60-top-view-t.jpg" data-src="/img/products/vq60-top-view.jpg" >
             <div class="camera_caption fadeFromBottom">
             Top view<a href="/img/products/vq60-top-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>
         
      
           <div class="product_image" data-thumb="/img/products/vq60-top-sec-view-t.jpg" data-src="/img/products/vq60-top-sec-view.jpg" >
             <div class="camera_caption fadeFromBottom">
            Top view interior <a href="/img/products/vq60-top-sec-view-large.jpg" class="product_image view_large group"><i class=" icon-fullscreen"></i> View large</a>
           </div>
         </div>

   
        </div><!-- #camera_wrap_1 -->

   
    

        </div>
        
         <!--Insert Project Details-->
        <div class="span4 product_specs">
        <h3>Specifications</h3>
            <table  class="table table-striped">
    
                    <tr>
                            <td>Length overall:</td>
                            <td>18.20m</td>
                    </tr>
                    <tr>
                            <td>Length waterline:</td>
                            <td>12.53m</td>
                    </tr>
                    <tr>
                            <td>Beam max:</td>
                            <td>5m</td>
                    </tr>
                    <tr>
                            <td>Draught including drives:</td>
                            <td>1.4m</td>
                    </tr>
                    <tr>
                            <td>Displacement:</td>
                            <td>20000 Liters</td>
                    </tr>
                    <tr>
                            <td>Fuel:</td>
                            <td>4000 Liters</td>
                    </tr>
                    <tr>
                            <td>Fresh water:</td>
                            <td>250 Liters</td>
                    </tr>
                    <tr>
                            <td>Engines:</td>
                            <td>2x 900hp or more</td>
                    </tr>
                    <tr>
                            <td>Max speed:</td>
                            <td> 40kn+ depending on engines</td>
                    </tr>
                    <tr>
                            <td>Accommodation:</td>
                            <td>2+2+2 crew</td>
                    </tr>
                    <tr>
                            <td>Naval architecture:</td>
                            <td>Marlon Weijers</td>
                    </tr>
                    <tr>
                            <td>Styling:</td>
                            <td>Marlon Weijers</td>
                    </tr>
                    <tr>
                            <td>Interior design:</td>
                            <td>Marlon Weijers</td>
                    </tr>
                    <tr>
                            <td>Classification:</td>
                            <td>CE-B or LLOYDS</td>
                    </tr>
            </table>
        </div>
        
        </div>
        
        <div class="span8 product_description">
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
                navigation: false,
                playPause: false,
                fx: 'scrollHorz'
  
        });
                    

    </script>