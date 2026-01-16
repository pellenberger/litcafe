<?php

$month = array("01"=>"Januar", "02"=>"Februar", "03"=>"März", "04"=>"April", "05"=>"Mai", "06"=>"Juni", "07"=>"Juli", "08"=>"August", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Dezember");


$count = -1;
$children_limit = $children_limit;

if($date_filter == "archiv"):
$collection = $pages->find('veranstaltungen')->children()->published()->sortBy('date_event_start', 'desc')->filter(function($child) {
return strtotime($child->date_event_start()) < time();
});
endif;

if($date_filter == "all"):
$collection = $pages->find('veranstaltungen')->children()->published();
endif;


if($date_filter == "today"):
$collection = $pages->find('veranstaltungen')->children()->published()->filter(function($child) {
return strtotime($child->date_event_start()) >= strtotime("-1 day");
});
endif;

?>

  <section class="flex justify-content-spacebetween">


<?php

?>
    <?php foreach($collection as $article): ?>
    <?php 
      $count++;
      if($count <  $children_limit)
      {
    ?>

        <article class="news  grid-col-47">
          <a class = "flex" href="<?php echo $article->url() ?>">

            <!--IMAGE-->
            <?php
            $image = $article->event_image()->toFile();
            $thumbURL = $image? $image->crop(140)->url(): '';
            ?>
            <div class="article-image grid-col-14" style='background-color:<?php echo $article->event_color() ?>'>
              <?php if($image): ?>
              <img src=<?php echo $thumbURL ?>>
              <?php endif ?>
            </div>

            <div class="article-text-wrapper grid-col-33 flex align-item-center">
              <div class="grid-col-31">
              <!--TITLE--> 
              <div class="article-text flex-column justify-content-center">
               
                <?php $tags = $article->tags()->split(); ?>
                <ul class="tags flex grid-col-33">
                  <?php  foreach($tags as $tag): ?>
                  <li><?= $tag ?></li>
                  <?php endforeach ?>
                </ul>

               

                <div class="news-title">
                <h1><?php echo $article->article_title()->kirbytext() ?></h1>
                </div>
              </div>   



              <time class="flex align-item-center">
                <?php $event_month = date("m",strtotime($article->date_event_start())); ?>
                <div class="month width-100"><?php echo $month["$event_month"]?></div>
                <?php 
                $event_date_start = $article->date_event_start();
                $event_date_end = $article->date_event_end();

                  $event_time_start = $article->start_time();
                  $event_date_start = date("d.m.Y",strtotime($article->date_event_start()));
                  echo  $event_date_start.", ". preg_replace('/(:\d{2}):00$/', '$1', $event_time_start);
              
                ?>
              </time>




   </div>
            </div>


          </a>
        </article>

    <?php 
}


   

      ?>

   <?php endforeach ?>

  </section>
       

