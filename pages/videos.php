<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>

  <!-- header image front page-->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer.jpg" >
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
       <a class="yt_link" href="http://www.youtube.com/watch?v=ZZ9zNAfC_1E?rel=0&amp;wmode=transparent&amp;autoplay=1"> 
        <div class="span6 video">
          <img class='youtube'  src="../img/generic/video-vq32.jpg">
               <div class="video_title "><h3>Vanquish VQ32</h3>
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
  
  
<script>$(".yt_link").colorbox({iframe:true, innerWidth:640, innerHeight:390, autoplay:true});</script>
  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
  
 