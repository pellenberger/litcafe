<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html lang="de">
<head>

 <?php    
  snippet('head')       
 ?>

</head>





<body id="news-overview">


<div id='wrapper'>
    
    
  <header class="grid-col-96">

    <nav>
      <?php
        
      snippet('navigation')

      
      ?>
    </nav>

  </header>

       
  <div id="content" class="grid-col-96 center">
        <div class="grid-col-60 content-text ">

    
      <div class="grid-col-60"><?php echo $page->richtext()->kirbytext() ?></div>

     </div>

 <section>

    <aside>
       
     
        <?php
          snippet('news',
          array('children_limit' => '100','date_filter'=>'today'))
        ?>
    </aside>

  </section>

  <!--<section id="archiv-wrapper">
  <h2><a href="/archiv">Archiv</a></h2>

  
  </section>-->
       


  <footer>   
    <?php
      snippet('footer');
    ?>
  </footer>
      

  </div>
        

</div> 



</body>

</html>