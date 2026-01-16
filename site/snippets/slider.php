
<!--SLIDER-->

  <?php
  $counter = 0;//counter for image id;
  $counter1 = 1;//counter for gallery name
  $counter3 = 0;
  $gallery_name = $gallery_name_unique."-";
  $image_arr = $collection;
  $structur_field = $structur_field_name;

  $image_collection = $collection->{$structur_field}()->toStructure();
  $structurfield_count = $collection->{$structur_field}()->toStructure()->count();

  if ($structurfield_count != ""){

    foreach($image_collection as $single_image): ?>

    <?php 
    $counter++;
    $counter1++;  
    $counter3 = $counter1 - 2;


    ?>

    <?php
    $image = $single_image->gallery_img()->toFile();
       
    $thumbURL = $image? $image->resize(2000)->url(): '';

    ?>
    <li id="<?php echo $gallery_name.$counter ?>">

 <!-- Gallery-Navigation- -->
      <a style="left:<?php echo $counter*20 ?>px" class="gallery-nav-button" href="#<?php echo $gallery_name.$counter1 ?>"></a>
        <div class="counter-element"><?php echo $counter."/".$structurfield_count ?></div>
  



     



<!--START-->
    <?php  if($counter ==  "1" ) {  ?>


      <a class="navigation-left" href="#<?php echo $gallery_name.$structurfield_count ?>"></a>
      <a class="navigation-right" href="#<?php echo $gallery_name.$counter1 ?>"></a>

      <a  class="gallery-image" href="#<?php echo $gallery_name.$counter1 ?>">
           
    <?php } ?>


   <!--END-->

      <?php  if($counter ==  $structurfield_count ) { ?>

    <a class="navigation-left" href="#<?php echo $gallery_name.$counter3 ?>"></a>
    <a class="navigation-right" href="#<?php echo $gallery_name."1" ?>"></a>


    <a  class="gallery-image" href="#<?php echo $gallery_name."1" ?>"> 

    <?php } ?> 


    <!--BETWEEN-->

    <?php  if($counter !=  "1" and $counter !=  $structurfield_count) { ?>



      <a class="navigation-left" href="#<?php echo $gallery_name.$counter3 ?>"></a>
      <a class="navigation-right" href="#<?php echo $gallery_name.$counter1 ?>"></a>

        <a  class="gallery-image" href="#<?php echo $gallery_name.$counter1 ?>">

    <?php } ?>


        <!--TEXT-->
    <?php if($single_image->text() != ""){ ?>

      <div>
      <?php echo $single_image->text()->kirbytext();  ?>
      </div>
    
    <?php
    }


    if($single_image->gallery_img() != ""){ ?>

    <!--IMAGE-->
            <div>
              <img src=<?php echo $thumbURL ?>>

              <?php if($single_image->caption()->exists()): ?>
                <span>                  
                    <?php echo $single_image->caption(); ?>
                </span>
              <?php endif ?>  
            </div>
    
    <?php
    }


    if($single_image->video() != ""){ ?>

    <!--IMAGE-->
    <div>
      <video  autoplay loop>
        <source src="<?php echo $single_image->video()->toFile()->url() ?>" type="video/mp4">
      </video>
    </div>
    
    <?php
    }
?>


      </a>




    </li>

  


    <?php endforeach ?>




  <?php } ?>

