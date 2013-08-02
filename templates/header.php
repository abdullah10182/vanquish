<?php 
//mobiel detection
include 'Mobile_Detect.php';
$detect = new Mobile_Detect;

$page="home";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else $page="home";

$ie = false;
$ie_10= false;
$ie_old= false;
preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);

if (count($matches)>1){
  //Then we're using IE
  $ie = true;
  $version = $matches[1];
  
  switch(true){
    case ($version<=8):
      $ie_old =true;
      break;

    case ($version==10):
      $ie_10= true;
      break;

    default:
      //You get the idea
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Vanquish Yachts | <?php echo ucfirst($page); ?></title>
  <meta name="keywords" content="Vanquish yachts">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
 
  
  <meta property="og:title" content="Vanquish | Designed By Triangon">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.vanquish-yachts.com">
	<meta property="og:site_name" content="Vanquish Yachts">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/colorbox.css" />
  <link rel="stylesheet" href="/css/camera.css">
  <link rel="stylesheet" href="/css/custom-styles.css">
  


      <!-- Javascript
    ================================================== -->
    <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/rotate.js"></script>
    <script src="/js/jquery.colorbox-min.js"></script>
    <script src="/js/jquery.mobile.customized.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/camera.min.js"></script>
    <script src="/js/mb.bgndGallery.js"></script>
     <script src="/js/custom.js"></script>

  <link rel="shortcut icon" href="http://www.vanquish-yachts.com/favicon.ico">
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42897876-1', 'vanquish-yachts.com');
  ga('send', 'pageview');

</script>
  
 
</head>

<body class="<?php echo $page; ?>">
  <div id="site_message"></div>
  <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDownBig">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="/"><img src="/img/logo.png" alt="Title"></a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li class="<?php echo ($page == "home" ? "active" : "");?>"><a href="/">Home</a></li>
            
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Boats <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/vq32">Vanquish VQ32</a></li>
                  <li><a href="/vq40">Vanquish VQ40</a></li>
                  <li><a class="soon" href="#">Vanquish VQ60</a></li>
                </ul>
            </li>
            
            
            <li class="<?php echo ($page == "gallery" ? "active" : "");?>"><a href="/gallery">Gallery</a></li>
             <li class="<?php echo ($page == "videos" ? "active" : "");?>"><a href="/videos" >Videos</a></li> <!-- href="/pages/videos.php?page=videos" -->
             <li class="<?php echo ($page == "events" ? "active" : "");?>"><a href="/events">Events</a></li>
             <li class="<?php echo ($page == "dealers" ? "active" : "");?>"><a href="/dealers">Dealers</a></li>
             <li class="<?php echo ($page == "contact" ? "active" : "");?>"><a href="/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  