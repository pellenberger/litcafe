<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html lang="de">
<head>

 <?php    
  snippet('head')       
 ?>

</head>





<body id="archiv">


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


  <aside>
  <h2>Archiv</h2>
       
     <div>
     <?php echo $page->richtext()->kirbytext() ?>
     </div>
        <?php
          snippet('news',
          array('children_limit' => '1000','date_filter'=>'archiv'))
        ?>
  
  </aside>
       


  <footer>   
    <?php
      snippet('footer');
    ?>
  </footer>
      

  </div>
        

</div> 



</body>

</html>