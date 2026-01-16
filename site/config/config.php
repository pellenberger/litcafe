<?php

return [
  'debug' => true,
  'panel.install' => true,
  'languages' => true,
  'url' => '*',


  'community.markdown-field.buttons' => ['headlines', 'bold', 'italic', 'divider', 'link', 'email', 'pagelink', 'file', 'divider', 'ul', 'ol'],
  'community.markdown-field.font' => [
    'family'  => 'sans-serif',
    'scaling' => false,
    'size'    => 'regular',
  ],

  'community.markdown-field.modals' => true,
  'community.markdown-field.blank' => false,
  'community.markdown-field.invisibles' => false,



  'thumbs' => [
    'driver' => 'im',
    'autoOrient' => true
  ],

  'hooks' => [
    'page.duplicate:after' => function ($duplicatePage) {
      if ($duplicatePage->template() == "news") {
        try {

          $dateNow = date_create()->format('Y-m-d H:i');
          $newcontent = $duplicatePage->update([
            'article_title' => 'new title',
            'created' => $dateNow
          ]);
        } catch (Exception $e) {

          $e->getMessage();
        }
      }
    },
    'page.update:after' => function ($newPage, $oldPage) {
      try {
        if ($newPage->title() == "Poster") :
          exec("wkhtmltopdf https://litcafe.ch/de/poster?nocache=true content/poster/poster.pdf");
        endif;
        throw new Exception('hey, congrats, your poster was successfully saved as PDF');
      } catch (Exception $e) {

        $e->getMessage();
      }
    }

  ]


];
