<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
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
            <li class="active">Videos</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <h2>Videos</h2>
          <p>Coming Soon</p>
        </div>
      </div>
      
     
      
    </div>
  </section>  
  
  
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
        <img src="/img/generic/gallery-footer.jpg" >
  </section>
  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
  
 