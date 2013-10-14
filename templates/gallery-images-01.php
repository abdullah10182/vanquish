<?php 
    $dir_t = "../img/gallery/vq32/thumbnail/*.jpg";
    $dir = "../img/gallery/vq32/image/*.jpg";
    //get the list of all files with .jpg extension in the directory and safe it in an array named $images
    $images_t = glob( $dir_t );
    $images = glob( $dir );
?>  
    <!-- ---------------------------------------- -->
    <!--start-->  
   <div class="row-fluid text-center">        
 <?php
  $counter =0;
 for (($i=count($images)-1); $i>=0; $i--) {

     if ($counter == 4){
        
         echo "  <!--start-->
             <div class=\"row-fluid text-center\"> ";
         $counter =0;
         
     }
     ?>  
    		<div class="span3 thumbs">
    			<img  src="<?php echo $images_t[$i]; ?>" alt="">
    			<a class="gallery_01" href="<?php echo $images[$i]; ?>" title="Vanquish Yachts">
    				<span class="title">
    					<span>Vanquish VQ43</span>
    				</span>	
    			</a>
    		</div>
  
    <?php 

       if ($counter == 3){
            echo "</div>   <!--end--> ";
        
       }
  $counter++;
       /*
    if (current($images) == $images[0]) {
         echo "</div>   <!--end--> ";
    }*/
       
       
   
 } ?>  
 
 