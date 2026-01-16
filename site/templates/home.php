<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>

<html lang="de">
<head>

 <?php    
  snippet('head')       
 ?>

</head>



<body id="home">


  <div id='wrapper' >  
    
    <header class="grid-col-96">  
      <nav>
        <?php
          
        snippet('navigation');
        $counter = 0;

        
        ?>
      </nav>

    </header>

       
     
  <div id="content" class="grid-col-96 center">

    <section class="flex justify-content-spacebetween collection">
      <?php foreach($pages->published() as $item): ?>
        <?php
          $image = $item->home_categorie_image()->toFile(); 
          $thumbURL = $image? $image->resize(800)->url(): '';
        ?>
        <?php if($item->show_in_home()->toBool() == true): ?>
          <?php $url_children = $item->url(); ?>
          <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $url_children ?>">
            <article class="grid-col-47 subpage" >
              <div class="article-image" style="background-image:url(<?php echo $thumbURL ?>)"></div>
              <h1><?php echo $item->title() ?></h1>
              <div class="article-text">
              <?php echo $item->home_categorie_text()->kirbytext() ?>
            </article>
          </a>
        <?php endif ?>
      <?php endforeach ?>

    </section>

    <section id="events">
      <aside>
          <h2 class="width-100"><?php echo $site->find('veranstaltungen')->title() ?></h2>

          <?php
            snippet('news',
            array('children_limit' => '12','date_filter'=>'today'))
          ?>

        <?php 
        $lang = $kirby->language();

        ?>
        <h3 class="width-100">
          <a href="/veranstaltungen"><?php echo $lang == "de" ? "Nächste Veranstaltungen" : "Prochains Événements" ?></a>
          <!--•-->
          <!--<a href="/archiv"><?php echo $lang == "de" ? "Archiv" : "Archivw" ?></a>--> 
        </h3>

      </aside>

    </section>

    <section id="sessions" class="flex justify-content-spacebetween">

      <h2 class="width-100"><?php echo $site->find('sessions')->title() ?></h2>
      <?php foreach($site->find('sessions')->children() as $items): ?>
      <article class="grid-col-47">
        <?php echo $items->title(); ?>
        <?php echo $items->richtext()->kirbytext(); ?>
        </a>
      </article>
      <?php endforeach ?>

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