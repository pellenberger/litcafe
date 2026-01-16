<div id="navigation" class="flex justify-content-spacebetween">

  <div id="logo" class="grid-col-40">
    <?php
	    $lang = $kirby->language();
		if ($lang == 'de'){ ?>
		 <a href="<?php echo $site->url() ?>"><h1>Literaturcafé</h1></a>
	<?php
			}
	if ($lang == 'fr'){ ?>
	 <a href="/fr"><div><h1>Café littéraire</h1></div></a>
	<?php } ?>
   
  </div>

  

  <div id="navigation-wrapper" class="grid-col-96 center flex">

        <div class="grid-col-10  nav-lang flex justify-content-end">
         <?php    
          snippet('nav_lang')       
         ?>
        </div>

    <input type="checkbox" id="desktop-icon" />
    <label for="desktop-icon" class="grid-col-5">

      <div id="menu-button"></div>
   
    </label>
     
    

  

    <div id="navigation-content">
      <div class="flex grid-col-96 center navigation-content-inner justify-content-spacebetween">

       

    	<div id="close-button"><a href=""><img src="/content/close.svg"></a></div>
    	<div class="flex nav-lang-mobile grid-col-7">
			<?php snippet('nav_lang') ?>
        </div>

        <ul class="grid-col-96 mainmenu">
     

          <?php foreach($pages->listed() as $items): ?>


			<li>
			    <?php $url_children = $items->url(); ?>

			    <a<?php e($items->isOpen(), ' class="active"') ?> href="<?php echo $url_children ?>">
			    <h1><?php echo $items->title() ?></h1></a>
 
			</li>
 		 <?php endforeach ?>

		</ul>


		<div class="flex grid-col-90  social-media">
			<a href="<?php echo $site->facebook() ?>" target="blank" class="social-media-img"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/cafe_litterairebiel/" target="blank" class="social-media-img"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
			<a  href="https://litcafe.us17.list-manage.com/subscribe?u=441dc7fa82a72bb8064b4142b&id=7fb567b6a8">Newsletter</a>
		</div>

	</div>

  </div>

  </div>
</div>  