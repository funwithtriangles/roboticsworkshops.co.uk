<!doctype html>
<?php $pageName = perch_layout_var('page', true); ?>
<html class="no-js" lang="en" data-page="<?= $pageName ?>">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ($pageName != 'home') { perch_pages_title(); echo " -"; } ?> Robotics Workshops</title>

    <?php     
        perch_page_attributes(array(        
          'template' => 'seo.html'    
        )); 
    ?>
    
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="//use.edgefonts.net/comfortaa.js"></script>

    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />

  </head>
  <body>
  <header am-SiteHeader>
    <a href="/"><img src="/assets/img/logo.svg" am-SiteHeader-Logo></a>

    <nav am-SiteHeader-Nav>
      <?php perch_pages_navigation(array(
        'hide-extensions' => true
      )); ?>
    </nav>
  </header>