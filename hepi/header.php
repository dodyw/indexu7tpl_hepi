<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php print html_head("title"); ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="<?php print html_head("meta_keywords"); ?>" />
  <meta name="description" content="<?php print html_head("meta_description"); ?>" />

  <!-- js -->
  
  <script type="text/javascript" src="<?php print URL; ?>lib/js/jquery.js"></script>

  <?php print html_head("css"); ?>
  <?php print html_head("js"); ?>
  <?php print html_head("custom"); ?>

  <?php include TPL_PATH."indexu.js.php"; ?>

  <!-- css -->

  <link href="<?php print TPL_URL; ?>style.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>css/effects.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>functions/css/shortcodes.css" rel="stylesheet" type="text/css" />

  <!-- enable one of the following css for skin selection -->


  <!-- <link href="<?php print TPL_URL; ?>styles/mithril.css" rel="stylesheet" type="text/css" /> -->
  <link href="<?php print TPL_URL; ?>styles/taupe.css" rel="stylesheet" type="text/css" />   

  <link href="<?php print TPL_URL; ?>indexu.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>custom.css" rel="stylesheet" type="text/css" />



  <!-- google one plus -->
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

  <base href="<?php print URL; ?>" />
</head>

<?php if (SCRIPT_ID=='detail') : ?>
  <body onload="initialize()" class="home blog logged-in admin-bar layout-left-content theme-woostore gecko layout-left-content">
<?php else : ?>
  <body class="home blog logged-in admin-bar layout-left-content theme-woostore gecko layout-left-content">
<?php endif; ?>

<?php
  if ($lep->config['facebook_enable']) $fb->loadJsSDK();
?>

<body >

<div id="wrapper">

  <div id="header" class="col-full">
    <div id="logo">
      <a href="<?php print URL; ?>" title=""><img src="<?php print TPL_URL; ?>images/logo.png" alt="" /></a>
      <h1 class="site-title"><a href="<?php print URL; ?>"><?php print DIR_NAME; ?></a></h1>
      <span class="site-description">The oldest and the most powerful directory script</span>
    </div><!-- /#logo -->

    <ul id="account-nav" class="nav fr">
      <li class="account">
        <a href="<?php print URL; ?>usercp/" title="My Account">Account</a>
      </li>
    </ul><!--/#account-nav-->
    
  </div><!-- /#header -->
