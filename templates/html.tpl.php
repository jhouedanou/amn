<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php print $language->language; ?>"><![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php print $language->language; ?>"><![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php print $language->language; ?>"><![endif]-->
<!--[if IE 9 ]>   <html class="no-js ie9" lang="<?php print $language->language; ?>">      <![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="<?php print $language->language; ?>">          <!--<![endif]-->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; /* Drupal's META tag system */ ?>
  <title><?php print $head_title; ?></title>
    <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $styles . "\n";  /* Drupal's CSS system */ ?>
  <?php print $scripts . "\n"; /* Drupal's JS system */  ?>
</head>
<body class="<?php print $classes; ?>">
  <?php print $page_top . "\n";    /* generated content from modules, etc. */    ?>
  <?php print $page . "\n";        /* page{--*}.tpl.php renders in this space */ ?>
  <?php print $page_bottom . "\n"; /* generated content from modules, etc. */    ?>
</body>
</html>
