
<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>

<html lang="de">
<head>

 <?php    
  snippet('head')       
 ?>

 <?php
  $image = $page->event_image()->toFile();
  $thumbURL = $image? $image->resize(400)->url(): '';
?>

<meta property="og:url"                content="<?php echo $page->url() ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $page->title() ?>">
<meta property="og:description"        content="<?php echo $page->text_full() ?>" >
<meta property="og:image"              content= "<?php echo $thumbURL ?>"

</head>





<body id="news">


  <div id='wrapper'>  
    
    <header class="grid-col-96 center">  
      <nav>
        <?php
          
        snippet('navigation')

        
        ?>
      </nav>

    </header>

       
     
    <div id="content" class="grid-col-96 center">

  <section class="flex justify-content-spacebetween">



       

        <article id="<?php echo $page->title()?>" class="grid-col-96 flex justify-content-spacebetween algin-item-start">
          
       
          <div class="event-details flex">
          <h1 class="grid-col-96"><?php echo $page->article_title() ?></h1>
          <!-- Startdatum -->
          <div class="flex grid-col-96 date-time">
	          <div class="date">
	          <?php 
	            $event_date_start = date("d.m.Y",strtotime($page->date_event_start()));
	            $event_date_end = date("d.m.Y", strtotime($page->date_event_end())); 

	            echo $event_date_start;
	          ?>
	         
	          <!-- Enddatum -->
	          
	          <?php
	            if($page->date_event_end()->isNotEmpty() && $event_date_start !== $event_date_end)
	            {
	              echo $event_date_end;
	            }
	          ?>
	        </div>

			<!-- Startzeit -->
			<div class="time">
				<?php

				if($page->start_time()->isNotEmpty())
				{
                $event_time_start = $page->start_time();
                echo  preg_replace('/(:\d{2}):00$/', '$1', $event_time_start);				}

				?>


				<!-- Endzeit -->

				<?php
				if($page->end_time()->isNotEmpty())
				{
                $event_time_end = $page->end_time();
                echo  " - " . preg_replace('/(:\d{2}):00$/', '$1', $event_time_end);
				}

				?>
			</div>
			<div class="grid-col-96">

		  <?php $tags = $page->stil()->split(); ?>
                <ul class="tags flex grid-col-33">
                  <?php  foreach($tags as $tag): ?>
                  <li><?= $tag ?></li>
                  <?php endforeach ?>
                </ul>

                </div>

	    </div>

		<div class="flex grid-col-96 justify-content-spacebetween article-main algin-item-start">
			<div class="article-text grid-col-50">
				<div>
				<?php 
				if($page->text_full()->isNotEmpty()) 
				{
				  echo $page->text_full()->kirbytext();

				}
				?>
				</div>
				<div>
				<?php
				if($page->price()->isNotEmpty())
				{
				  echo $page->price();
				}

				?>
				</div>
			</div>

			<!-- Preis -->


			<div class="grid-col-40 gallery-wrapper">
				<ul id="gallery"">
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
			</div>
		</div>

       </div>


        </article>


  </section>

  <section>
     <aside>
       
     
        <?php
          snippet('news',
          array('children_limit' => '12','date_filter'=>'today'))
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