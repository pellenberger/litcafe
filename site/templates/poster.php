
<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html lang="de">
<head>

  <link type="text/css" href="/assets/css/print.css?<?php echo time(); ?>" rel="stylesheet"  media="all,screen" />
  <link type="text/css" href="/assets/css/grid.css" rel="stylesheet"  media="all" />

</head>


<body>

<div id='wrapper' style="background:rgb(26,41,102); color: white;" >

  <header>
    <h3>Café Littéraire</h3>
    <h2>Programme</h2>
  </header>
  <main class="flex justify-content-center align-item-center">
    <div class="grid-col-90 text-center inner">
      <?php foreach ($page->events()->toStructure() as $items): ?>
        <div>
          <h4><?php echo $items->date(); ?></h4>
          <h3><?php echo $items->title(); ?></h3>
          <h4><?php echo $items->subtitle(); ?></h4>
        </div>
      <?php endforeach ?>
    </div>

  </main>


  <sidebar>
    <div>
      <h1><?php echo $page->month() ?></h1>
    </div>
  </sidebar>

  <footer class="width-100">
  <div class="width-100 text-center">Retrouvez notre programme complet sur le site web www.litcafe.ch</div>
  <div class="flex  width-100 justify-content-spacearound time-table">
    <div class="grid-col-90 flex justify-content-spacebetween ">   
      <ul>
        <li><h4>Literaturcafé</h4></li>
        <li>Rue Haute 11</lir>
        <li>2502 Biel/Bienne</li>
        <li>www.litcafe.ch</li>
        <li id="socila-media-icon">facebook | instagram</li>
      </ul>
      <ul>
        <li><h4>Dienstag</h4></li>
        <li>19:30 MardiPhilo</li>
        <li><h4>Vendredi</h4></li>
        <li>20:00 Konzert</li>
        <li><h4>Samedi</h4></li>
        <li>09:30 - 13:30 Café & Bücher</li>
      </ul>
    </div>
  </div>
  <div class="width-100 text-center">Mit freundlicher Unterstützung der Stadt Biel und SWISSLOS/Kultur Kanton Bern</div>
  </footer>
  
</div>
      




</body>


</html>

