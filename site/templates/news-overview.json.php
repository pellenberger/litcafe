<?php

header("Content-type: application/json; charset=utf-8");
$data = $pages->find("veranstaltungen")->children()->published()->filterBy("category", "!=", "")->flip();


foreach($data as $article):
    
    //image
    $image = $article->event_image()->toFile();   
    $thumbURL = $image? $image->resize(1000)->url(): "";
    //date time
    $date_start = date("Y-m-d",strtotime($article->date_event_start()));
    $date_end = date("Y-m-d",strtotime($article->date_event_end()));

    

    $event_date_start = $date_start." ".$article->start_time();
    $event_date_end = $date_end." ".$article->end_time();
    //id
    $event_id = strtotime($article->created());


    


    $json[] = 

    [

    "event_id" => (string)$event_id,
    "event_title" => (string)$article->article_title(),
    "event_description" => (string)$article->text_full()->kirbytext(),
    "image_url" => (string)$thumbURL,
    "detail_url"   => (string)$article->url(),
    "event_categories"   => [(string)$article->category()],
    "event_dates"   => [["start_date" => (string)$event_date_start,"end_date" => (string)$event_date_end]],
    "venue_name"=> "Literaturcafé",
    "venue_address"=> "Obergasse 11",
    "venue_city"   => "Biel/Bienne",
    "venue_zip"   => "2502"

    ];

endforeach;

$json_parser = json_encode($json);
echo '{"api_key": "'.$kirby->option('culturoscope_api_key').'", "events": '.$json_parser.'}';

?>