<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo('name');?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo get_bloginfo('template_url');?>/img/favicon.png" rel="icon">
  <link href="<?php echo get_bloginfo('template_url');?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo get_bloginfo('template_url');?>/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_bloginfo('template_url');?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_bloginfo('template_url');?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_url');?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_url');?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_url');?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_url');?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_bloginfo('template_url');?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
	======================================================= -->
</head>
	<?php wp_head();?>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">BizPage</a></h1>
		<div><img src="<?php echo get_theme_mod('image_upload_test'); ?>" alt=""></div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
	  
        
	   <?php wp_nav_menu( array( 'theme-location' => 'header-menu',
        		'menu_class'=>'nav-menu'

        ) ); ?>
	   
      </nav><!-- #nav-menu-container -->
	  
    </div>
  </header><!-- #header -->
   