<?php 
$yt_link_vq32="http://www.youtube.com/embed/dY0PGR9wiaI?rel=0&amp;wmode=transparent&amp;autoplay=1&amp;vq=large";
$yt_link_vq43="http://www.youtube.com/embed/U7GVAashAPQ?rel=0&amp;wmode=transparent&amp;autoplay=1&amp;vq=large";
$yt_link_class ="yt_link";

   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);
   
   if ($detect->isMobile()) {
      $yt_link="http://www.youtube.com/watch?v=dY0PGR9wiaI&amp;vq=large";
      $yt_link_class = "";
}

?>

  <!-- header image front page-->
  <section id="clients"> 
        <img src="/img/generic/gallery-footer-10.jpg" >
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
            <h1>Videos</h1>
        </div>
      </div>
        
     <!-- VQ32 --> 
     <div class="row-fluid">
       <a class="<?php print $yt_link_class; ?>" href="<?php print $yt_link_vq32; ?>"> 
        <div class="span6 video box_left">
          <img class='youtube'  src="../img/generic/video-vq32.jpg">
               <div class="video_title "><h3>Vanquish VQ32</h3>
        </div>
      </div> 
      </a>
 
    
    <!-- VQ43 -->
  
       <a class="<?php print $yt_link_class; ?>" href="<?php print $yt_link_vq43; ?>"> 
        <div class="span6 video">
          <img class='youtube'  src="../img/generic/video-vq43.jpg">
               <div class="video_title "><h3>Vanquish VQ43</h3>
        </div>
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
          <h2>Where Innovation Meets Perfection.</h2>
        </div>
      </div>
    </div>
  </section>
  
  
<script>$(".yt_link").colorbox({iframe:true, innerWidth:640, innerHeight:480, autoplay:true,opacity:".5"});</script>
  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
  
 