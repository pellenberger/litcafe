
<?php

$month = array("01"=>"Januar", "02"=>"Februar", "03"=>"März", "04"=>"April", "05"=>"Mai", "06"=>"Juni", "07"=>"Juli", "08"=>"August", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Dezember");


$count = -1;
$children_limit = $children_limit;
$date_filter = $date_filter;


if($date_filter == "all"):
$filter = date("1970-01-01");
endif;

if($date_filter == "today"):
$filter = date("Y-m-d");
endif;

if($date_filter == "archiv"):
$filter = date("Y-m-d");
endif;


  ?>
  <section class="flex archiv">

    <?php foreach(page('veranstaltungen')->children()->visible() as $article): ?>

    <?php 

    if($article->date_event_start() < $filter){

      $count++;

if($count <  $children_limit)
{

    ?>

          <!--<a href="<?php echo $article->url() ?>">
                <div class="archiv-title">
                <?php echo $article->article_title()->kirbytext() ?>
                </div>
          </a>-->
        

    <?php 
}
}

   

      ?>

   <?php endforeach ?>

  </section>
       

