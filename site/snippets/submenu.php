     <ul class="flex">
          <?php foreach($page->parents()->children()->visible() as $item): ?>
          <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><h1><?php echo $item->title()->html() ?></h1></a></li>
          <?php endforeach ?>
        </ul>