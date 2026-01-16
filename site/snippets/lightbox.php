
<!--GALLERY-->

  <?php
  $counter = 0;//counter for image id;
  $counter1 = 0;//counter for gallery name
  $counter1++;//counter to jump to next img
  $gallery_name = $gallery_name_unique."-";
  $image_arr = $collection;
  $structur_field = $structur_field_name;

  $image_collection = $collection->{$structur_field}()->toStructure();
  $structurfield_count = $collection->{$structur_field}()->toStructure()->count();


    foreach($image_collection as $single_image): ?>

    <?php 
    $counter++;
    ?>

    <?php
    $image = $single_image->gallery_img()->toFile();
       
    $thumbURL = $image? $image->resize(2000)->url(): '';
    $thumbURL_mobile = $image? $image->resize(1200)->url(): '';

    ?>
      <li class="col-dont-break-inside" id="<?php echo $gallery_name.$counter ?>" >
                              
          <a class="gallery-image flex-column justify-content-spacebetween" href="#<?php  echo $gallery_name.$counter ?>">
           
            <div><img src=<?php echo $thumbURL ?>></div>
            
            <span> 
                    
              <?php
              if($single_image->caption()->exists())  {
                echo $single_image->caption();
              }
              ?>
            </span>

          </a>
          <img class="only-mobile" src=<?php echo $thumbURL_mobile ?>>
          <!-- Gallery-Close-Button -->
          <a title="close" href="#close" class="background-lightbox"></a>
          <a class="close" href="#close">close</a>
         <!-- Gallery-Navigation- -->
          <a style="margin-top:<?php echo $counter*25?>px;" class="gallery-nav-button" href="#<?php echo $gallery_name.$counter ?>">
          </a>


          <?php  if($counter ==  $structurfield_count ) { ?>
          <a class="gallery-nav-button-center" href="#<?php echo $gallery_name."1" ?>"></a>
          <?php } else { $counter1++;?>

          <a class="gallery-nav-button-center" href="#<?php echo $gallery_name.$counter1; ?>"></a>

            <?php } ?>
      </li>
    <?php endforeach ?>


