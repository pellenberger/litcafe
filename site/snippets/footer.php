



<div id="footer-content" class="grid-col-93 flex justify-content-spacebetween">
   
	<div class="grid-col-40">
		<div class="grid-col-40 flex adress">
		  	<div><?php echo $site->footer_text()->kirbytext() ?></div>
		</div>

		<div class="flex grid-col-20 social-media" >
		  <a href="<?php echo $site->facebook() ?>" class="social-media-img">facebook</a>
		  <a href="<?php echo $site->instagram() ?>" class="social-media-img">instagram</a>
		  <a href="<?php echo $site->mailchimp() ?>">newsletter</a>
		  				
		</div>

		<div class="timetable grid-col-30">

		  <?php foreach($site->timetable()->toStructure() as $tt_items): ?>
		   
		      <div class="flex grid-col-30"><span class=" grid-col-8"><?php echo $tt_items->day()?></span><span><?php echo $tt_items->time()?></span></div>
		   
		  <?php endforeach ?>

		</div>




	</div>

	<div class="grid-col-52">
	<?php
    $image = $site->footer_image()->toFile();
    $thumbURL = $image? $image->resize(1000)->url(): '';
    ?>
			

  <figure>
   <?php $image_caption = $site->image($site->footer_image()->file());
     ?>
    <img src="<?=  $thumbURL ?>"" title="<?= $image_caption->caption()->html() ?>" >

   
  </figure>  


	</div>


</div>







  <?php
    snippet('scripts');
  ?>