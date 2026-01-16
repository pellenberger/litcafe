<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html lang="de">
<head>

 <?php    
  snippet('head')       
 ?>

</head>





<body id="default">


  <div id='wrapper'>
    
    
    <header class="grid-col-96">
     
      
      <nav>
        <?php
          
        snippet('navigation')

        
        ?>


       

      </nav>

    </header>

       
   <div id="content" class="grid-col-96 center ">
    
	<section class="flex justify-content-spacebetween">

<?php
    $image = $page->box_categorie_image()->toFile();
       
    $thumbURL = $image? $image->resize(1200)->url(): '';

    ?>






    <article class="grid-col-96 flex justify-content-spacebetween" >


 
   <div class="grid-col-60 content-text ">
      <div class="grid-col-60"><?php echo $page->richtext()->kirbytext() ?></div>
     </div>


 <?php if($page->gallery_position() == '1'): ?>
	<ul id="gallery" class="grid-col-32">
  <?php endif ?>
   <?php if($page->gallery_position() != '1'): ?>
  <ul id="gallery" class="col-3">
  <?php endif ?>
	 <!-- L I G H T B O X-->

		<?php 
		$counter= 1;
		$gallery_id = "gallery-".$counter;
		snippet('lightbox',
		array('structur_field_name' => 'gallery',
		'collection' => $page ,
		'gallery_name_unique' => $gallery_id
		))
		?>

	</ul>

    </article>

     
<section>


 <section>
    <aside>
       
        <?php
          snippet('news',
          array('children_limit' => '100','date_filter'=>'today'))

        ?>
      
    </aside>

  </section>



  <footer>   
    <?php
      snippet('footer');
    ?>
  </footer>
    

  </div>
      

  </div> 



</body>

</html>