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
            <li class="active">About</li>
          </ul>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span6">
          <h2>About Us</h2>
          <p class="lead">Learn About Who We Are</p>
          <p>Vanquish Yachts is a company that designs and builds high-end performance yachts. 
              These yachts are hand built using the latest manufacturing techniques ensuring the utmost quality and reliability.
              With the use of the latest design technologies and engineering principles
              we manufacture standard line yachts and customer specific yachts to suit any needs.</p>
          
          <p>Located in the Netherlands, Vanquish Yachts is a company which builds high-end yachts with passion and innovation, this certainly reflects in our products.
              Distinguish yourself with a unique product that excels above the rest; distinguish yourself with a hand built high-end performance machine that only Vanquish Yachts can deliver. 
             <p>
              <br />
          
        </div>
   
      
    
        
        <!--First Column - To change progress value make sure to adjust bar width and field value to the same amount-->
        <div class="span6 bars">
          <div class="progress-bar bar-one">
               <img src="../img/generic/design-icon.png">
                <div class="progress">
                	<span class="field">Design</span>
                    <span class="field-value fade-in">100%</span>
                    <div style="width: 100%;" class="bar"></div>
                </div>
            </div>
            
            <div class="progress-bar bar-two">
                   <img src="../img/generic/saling-icon.png">
                <div class="progress">
                	<span class="field">Performance</span>
                    <span class="field-value fade-in">100%</span>
                    <div style="width: 100%;" class="bar"></div>
                </div>
            </div>
            
            <div class="progress-bar bar-three">
                   <img src="../img/generic/material-icon.png">
                <div class="progress">
                	<span class="field">Materials</span>
                    <span class="field-value fade-in">100%</span>
                    <div style="width: 100%;" class="bar"></div>
                </div>
            </div>    
        </div>
 
   </div>  
        <br/>
     
      
    <div class="row-fluid about-kern-zinnnen">     
        <!--Second Column-->
        <div class="span4 ">
          <h2>Innovative & Graceful Design</h2>
         <p>Vanquish Yachts works together with the best yacht designers and interior architects to provide a unique product.</p>
        </div>
        
        <!--Third Column-->
        <div class="span4 ">
          <h2>Outstanding Saling Performace</h2>
          <p>High tech engineering translating into fast, adaptable and fuel efficient yachts. </p>
        </div>
        
            <!--Third Column-->
        <div class="span4 ">
          <h2>Superior Material Characteristics</h2>
             <p>Latest manufacturing techniques using seaworthy aluminum and high quality carbon fiber.</p>
        </div>
  </div>                

  </div>

  </section>  
  
  
  <!--Message Section-->
  <section id="message">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 text-center">
          <h2>"Distinguish yourself with a hand built high-end performance machine that only Vanquish Yachts can deliver"</h2>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--glasses front page-->
  <section id="clients"> 
        <img src="/vanquish/img/generic/gallery-footer.jpg" >
  </section>
    
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/vanquish/templates/footer.php";
   include_once($path_header);
 ?>
    
    
  