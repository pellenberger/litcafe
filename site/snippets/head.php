<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="alternate" type="application/rss+xml" href="<?php echo url('news/feed') ?>" title="News Feed" />
<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
<meta name="description" content="<?php echo $site->description()->html() ?>">
<meta name="keywords" content="<?php echo $page->tags()->html() ?>">
<link rel="icon" type="image/png" href="/content/favicon.png">
<link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">


<link type="text/css" href="/assets/css/grid.css" rel="stylesheet" />
<link type="text/css" href="/assets/css/lightbox.css" rel="stylesheet" />
<link type="text/css" href="/assets/css/slider.css" rel="stylesheet" />
<?php if(get("set-style")) Cookie::set("style", get("set-style")) ?>
<?php if(Cookie::get("style") === "old"): ?>
	<link type="text/css" href="/assets/css/main.css" rel="stylesheet" />
<?php else: ?>
	<link type="text/css" href="/assets/css/main-2025.css" rel="stylesheet" />
<?php endif; ?>


<link type="text/css" href="/assets/css/MyFontsWebfontsKit.css" rel="stylesheet" />


<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">