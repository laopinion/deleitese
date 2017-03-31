<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, height=device-height" >
  <meta name="robots" content="index, follow">
  <meta itemprop="genre" content="Food" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta property="og:locale:alternate" content="es_CO" />
  <meta property="og:locale" content="es_CO" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $head_title; ?></title>

  <!--Icono precomposed-->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path(); ?>sites/default/themes/deleitese/images/icon/touch-icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php print base_path(); ?>sites/default/themes/deleitese/images/icon/touch-icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php print base_path(); ?>sites/default/themes/deleitese/images/icon/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php print base_path(); ?>sites/default/themes/deleitese/images/icon/touch-icon-ipad-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php print base_path(); ?>sites/default/themes/deleitese/images/icon/touch-icon-iphone-6-plus.png">
  <!--FIN Icono precomposed-->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/jquery-1.10.min.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/script.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/slide.js"></script>
  <!--<script type="text/javascript" src="<?php // print base_path(); ?>sites/default/themes/deleitese/js/functions.js"></script>-->
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/modernizr.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/instafeed.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/deleitese/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/deleitese/css/normalize.css">
  <!--<link rel="stylesheet" type="text/css" href="<?php // print base_path(); ?>sites/default/themes/deleitese/css/media.css">-->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/infinite-scroll.js"></script>
  <script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-inview/2.2.0/angular-inview.min.js"></script>
  <script src="<?php print base_path(); ?>sites/default/themes/deleitese/js/angular-adsense.js"></script>
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/angular.js"></script>
  <base href="/">

  <meta name="description" content="Tu portal de gastronomía"/>
  <meta name="keywords" content="Gastronomía, gastronómico, arquitectura, arquitectura gastronómica, marketing gastronómico, novedades, diseño, vanguardia, tendencias, argentina, buenos aires, latinoamerica, cocina, comida" />
  <meta name="author" content="www.deleitese.co" />
  <meta name="ROBOTS" content="FOLLOW">
  <link rel="canonical" href="http://www.deleite.co">
  <link rel="image_src" href="http://www.deleitese.co/sites/default/themes/deleitese/images/compartir.jpg" />


  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:image" content="http://www.deleitese.co/sites/default/themes/deleitese/images/compartir.jpg" />
  
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.deleitese.co/" />
  <meta property="og:description" content="Manténgase informado sobre las novedades gastronómicas de Cúcuta, Norte de Santander y la frontera con Venezuela en deleitese.co" />
  <meta name="author" content="Diario La Opinión"/>
  <meta name="google" content="notranslate" />
  <meta name="geo.region" content="CO" />
  <meta name="geo.placename" content="Colombia" />
  <meta name="language" content="spanish" />
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Principal portal gastronómico de Norte de Santander, noticias, promociones, restaurantes aliados - Deléitese" />
  <meta itemprop="description" name="description" content="Gastrónomia regional, Cúcuta, Norte de santander. Manténgase informado sobre las novedades gastronomicas de Cúcuta, Norte de Santander y la frontera con Venezuela en deleitese.co"/>
  <meta itemprop="image" content="http://www.deleitese.co/sites/default/themes/deleitese/images/compartir.jpg" />
  <!-- twit card-->

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Gastrónomia regional, Cúcuta, Norte de santander. Manténgase informado sobre las novedades gastronomicas de Cúcuta, Norte de Santander y la frontera con Venezuela en deleitese.co">
  <meta name="twitter:url" content="http://www.deleitese.co"> 
  <meta name="twitter:site" content="@deleitese_co" />
  <meta name="twitter:title" content="Principal portal gastronómico de Norte de Santander, noticias, promociones, restaurantes aliados - Deléitese">
  <meta name="twitter:creator" content="@deleitese_co"> 




  <!-- ANALYTICS CODE -->
  <?php include_once("analyticstracking.php") ?>
  <?php include_once("clickio.php") ?>
  <!-- FIN ANALYTICS CODE -->

  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <!--CONTENT GENERAL-->
  <?php print $page_top; ?>
  <div class="centerContent borderContent">
    <div class="head_desktop"><?php include("header.tpl.php"); ?></div>
    <div class="head_movil"><?php include("header_movil.tpl.php"); ?></div>
    
    <?php print $page; ?>
    <?php // print $page_bottom; ?>
    
    <div class="footer_desktop"><?php include("footer.tpl.php"); ?></div>
    <!-- <div class="footer_movil"><?php //include("footer_movil.tpl.php"); ?></div> -->
  </div>
  <!--END CONTENT GENERAL-->

</body>

</html>