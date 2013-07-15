<?php 
$page="home";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else $page="home";
?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Vanquish Yachts | <?php echo ucfirst($page); ?></title>
  <meta name="keywords" content="Vanquish yachts">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <meta property="og:title" content="Vanquish | Designed By Triangon">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.vanquish-yachts.com">
	<meta property="og:site_name" content="Vanquish Yachts">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="/vanquish/css/font-awesome.min.css">
  <link rel="stylesheet" href="/vanquish/css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/vanquish/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vanquish/css/main.css">
  <link rel="stylesheet" href="/vanquish/css/colorbox.css" />
  <link rel="stylesheet" href="/vanquish/css/custom-styles.css">

  <script src="/vanquish/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


  <link rel="shortcut icon" href="/favicon.png">
</head>

<body>
        
  <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDownBig">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="/vanquish/index.php?page=home"><img src="/vanquish/img/logo.png" alt="Title"></a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li class="<?php echo ($page == "home" ? "active" : "");?>"><a href="/vanquish/index.php?page=home">Home</a></li>
            
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Boats <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Vanquish LP32</a></li>
                  <li><a href="#">Vanquish LP40</a></li>
                  <li><a href="#">Vanquish LP60</a></li>
                </ul>
            </li>
            
            
            <li class="<?php echo ($page == "gallery" ? "active" : "");?>"><a href="/vanquish/pages/gallery.php?page=gallery">Gallery</a></li>
             <li class="<?php echo ($page == "videos" ? "active" : "");?>"><a href="/vanquish/pages/videos.php?page=videos">Videos</a></li>
             <li class="<?php echo ($page == "events" ? "active" : "");?>"><a href="/vanquish/pages/events.php?page=events">Events</a></li>
             <li class="<?php echo ($page == "contact" ? "active" : "");?>"><a href="/vanquish/pages/contact.php?page=contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  