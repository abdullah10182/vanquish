<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>

  <!-- header image front page-->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-04.jpg" >
  </section>

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
       <a class="yt_link" href="http://www.navilex.nl/"> 
        <div class="span6 dealer">
     <h3> Navilex - Boat Trading Loosdrecht</h3>
     <img src="/img/generic/logo-navilex.png" >
     <div class="dealer_info">       
             Oud Loosdrechtsedijk 161</br>
            1231 LV LoosdrechT
      </div> 
      </div> 
      </a>
     
      
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
  
   
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
  
 