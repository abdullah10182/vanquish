<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/header.php";
   include_once($path_header);

?>
  <!--glasses front page-->
  <section id="clients"> 
        <img src="/img/generic/glasses.jpg" >
  </section>

  <!--Main Content-->
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          
          <!--Bread Crumbs-->
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
      
    
      <div class="row-fluid">
        <div class="span12">
               <a href="#" class="scrollToBottom" id="but1" >Contact Info</a>
        </div>
        <div style="margin-left: 0;" class="span12">
          <h2>Send us a message</h2>  
        </div>
      </div>
        
     
        
   
      <div class="row-fluid">
        
        <?php  

            // check for a successful form post  
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
      
            // check for a form error  
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
      
            ?>  
            
            <form method="POST" action="contact-form-submission.php">
              <div class="row-fluid">
                
                <div class="span4">
                  <div class="control-group">  
                    <div class="controls">  
                      <input type="text" class="input-block-level" name="contact_name" id="input1" placeholder="Your name">  
                    </div>  
                  </div>  
                  <div class="control-group">  
                    <div class="controls">  
                      <input type="text" class="input-block-level" name="contact_email" id="input2" placeholder="Your email address">  
                    </div>  
                  </div>
                  <div class="control-group">  
                    <div class="controls">  
                      <input type="text" class="input-block-level" name="contact_subject" id="input3" placeholder="Subject">  
                    </div>  
                  </div>
					       </div>
					       
					       <div class="span8">
                    <div class="control-group">  
                      <div class="controls">  
                        <textarea name="contact_message" id="input4" class="input-block-level" rows="8" placeholder="The message you want to send."></textarea>  
                      </div>  
                    </div>  
                    <div class="text-right">  
                      <input type="hidden" name="save" value="contact">  
                      <button type="submit" class="m-btn">Submit</button>  
                    </div>
					       </div>

        </div><!--End Row-->
      </form>
	
    		    
    </div>
        
        
   
        
  </section>  
  
  <!--Map Section-->
  <section id="map">
     <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Weg+en+Bos+21++2661+DG,+Bergschenhoek+&amp;aq=&amp;sll=51.979217,4.504931&amp;sspn=0.005915,0.016512&amp;t=m&amp;g=51.979217,4.50494&amp;ie=UTF8&amp;hq=&amp;hnear=Weg+en+Bos+21,+2661+DG+Bergschenhoek,+Lansingerland,+Zuid-Holland,+The+Netherlands&amp;ll=51.986,4.504903&amp;spn=0.01183,0.033023&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
  </section>
  
  
  
  
  
<?php 
   $path_header = $_SERVER['DOCUMENT_ROOT'];
   $path_header .= "/templates/footer.php";
   include_once($path_header);
 ?>
    
    
