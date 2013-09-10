<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>
  
 <!--glasses front page-->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-01.jpg" >
  </section>


  <!--Main Content-->
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          
          <!--Bread Crumbs-->
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <h1>Gallery Images</h1>
        </div>
      </div>
   
    
        
    <!-- gallery VQ40 -->  
<div class="accordion" id="03">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion" href="#collapseThree">
       <h2> Vanquish VQ40</h2>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse out">
      <div class="accordion-inner">
       <?php 
            $path_header = $_SERVER['DOCUMENT_ROOT'];
            $path_header .= "/templates/gallery-images-03.php";
            include($path_header);
       ?>
      </div>
    </div>
  </div>
 
</div> <!-- end gallery 00 page -->
    
   <!-- gallery 00 -->  
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion" href="#collapseTwo">
       <h2> Vanquish VQ32</h2>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse out">
      <div class="accordion-inner">
        <?php 
            $path_header = $_SERVER['DOCUMENT_ROOT'];
            $path_header .= "/templates/gallery-images-02.php";
            include($path_header);
       ?>
      </div>
    </div>
  </div>
 
</div> <!-- end gallery 00 page -->
  
   <!-- gallery 01 -->  
<div class="accordion" id="accordion1">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion" href="#collapseOne">
       <h2> Vanquish Yachts introduction 32ft at Topshelf open 2013 </h2>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse out">
      <div class="accordion-inner">
        <?php 
            $path_header = $_SERVER['DOCUMENT_ROOT'];
            $path_header .= "/templates/gallery-images-01.php";
            include($path_header);
       ?>
      </div>
    </div>
  </div>
 
</div> <!-- end gallery 01 page -->

   
      <div id="loading" style=" display: none; z-index:1; margin: 0 auto 0; width: 220px;"><span><img src='/img/generic/ajax-loader.gif'></span>loading...</div>

   
 </div> <!-- end container page -->
 </section>  
  
  
  <!--Message Section-->
  <section id="message">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 text-center">
          <h2>Ultra light materials for best performance and efficiency.</h2>
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
    $(".gallery_01").colorbox({rel:'gallery_01', transition:"elastic", width:"80%", opacity:".5", type:"iframe"});
    
  </script>  
