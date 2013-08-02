<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>

  <!-- header image -->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-02.jpg" >
  </section>

  <!--Main Content-->
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          
          <!--Bread Crumbs-->
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li class="active">Events</li>
          </ul>
          <h1>Events</h1>
        </div>
      </div>
      
      <div class="row-fluid events">
          <a href="http://www.salonnautiquecannes.com/">
        <div class="span6 event">
          
          <h3>Festival de la plaisance 2013</h3>
            <img src="../img/events/fdlp2013.jpg">
            Date: 10 - 15 September 2013 </br>
            Location: Cannes, France</br>
            Website: www.salonnautiquecannes.com</br>
        </div>
              </a>
      </div> 
    </div>
  </section>  
  
  
  <!--Message Section-->
  <section id="message">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 text-center">
          <h2>Innovative and Graceful design.</h2>
        </div>
      </div>
    </div>
  </section>
  
  

  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
