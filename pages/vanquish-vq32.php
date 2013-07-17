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
  
    	<p>Thumbnails with fixed height</p>
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
            <div data-thumb="../images/slides/thumbs/bridge.jpg" data-src="../images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/leaf.jpg" data-src="../images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/road.jpg" data-src="../images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/sea.jpg" data-src="../images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/shelter.jpg" data-src="../images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/tree.jpg" data-src="../images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
        </div><!-- #camera_wrap_2 -->
  

  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/vanquish/templates/footer.php";
   include_once($path_header);
 ?>
  
  <script>
      //Gallery
    $(".product-image").colorbox({rel:'gallery_01', transition:"elastic", width:"80%", opacity:".5"});
    
  </script>  
