<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/vanquish/templates/header.php";
   include_once($path_header);

?>

  
  <!--Main Content-->
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          
          <!--Bread Crumbs-->
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Our Boats</a> <span class="divider">/</span></li>
            <li class="active">Vanquish VQ32</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <h2>Vanquish VQ32</h2>
        </div>
      </div>
      
  
      <div class="row-fluid">
        <div class="span8" style="position:relative;">
            <a class="left carousel-control" href="#work" data-slide="prev"><i class="icon-angle-left"></i></a>
            <a class="right carousel-control" href="#work" data-slide="next"><i class="icon-angle-right"></i></a>
            
          <div id="work" class="carousel slide">
            <div class="carousel-inner">
                
         
              
              <!--Item One-->
              <div class="item active">
                <a class="product-image" href="/vanquish/img/products/vq32-side-view-large.jpg" title="Vanquish Yachts">
                <img src="/vanquish/img/products/vq32-side-view.jpg" alt="Title">
                </a>
              </div>
              
              <!--Item Two-->
               <div class="item">
                <a class="product-image" href="/vanquish/img/products/vq32-top-view-large.jpg" title="Vanquish Yachts">
                <img src="/vanquish/img/products/vq32-top-view.jpg" alt="Title">
                </a>
              </div>
              
              <!--Item Three-->
              <div class="item">
                <a class="product-image" href="/vanquish/img/products/vq32-top-sec-view-large.jpg" title="Vanquish Yachts">
                <img src="/vanquish/img/products/vq32-top-sec-view.jpg" alt="Title">
                </a>
              </div>
              
            </div>
     
          </div><!-- /.carousel -->      

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
          
         <p> All yachts have the latest TDI diesel engines from Mercury. These motors have a low fuel consumption 
             and fast and responsive acceleration with a top speed of 40 knots</p>
          <br />

        </div>
      </div>
        		
    </div>
  </section>  
  
  

  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/vanquish/templates/footer.php";
   include_once($path_header);
 ?>
  
  <script>
      //Gallery
    $(".product-image").colorbox({rel:'gallery_01', transition:"elastic", width:"80%", opacity:".5"});
    
  </script>  
