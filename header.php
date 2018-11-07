<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/touch-icon.png" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-custom.css?"/>
<!--
  <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/app.css"/>
-->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.3.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>

  <!--[if lt IE 9]>
  <meta http-equiv="Imagetoolbar" content="no" />
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
  <![endif]-->

	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

  <header id="header" class="header">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
		<h1 class="header-logo text-hide"><a href="<?php echo home_url('/'); ?>">Maverick Coffee</a></h1>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 xs-no-gutter">
          <nav class="global-nav" role="navigation">
            <button type="button" class="global-nav__toggle text-left visible-xs-block" data-toggle="collapse" data-target="#globalnav-collapse">
              <span class="sr-only">メニューを開閉</span>
              <span class="glyphicon glyphicon-menu-hamburger"></span>MENU
            </button>
            <div class="collapse" id="globalnav-collapse">
              <ul class="global-nav__list clearfix">

                <li><a href="./"><span class="icon icon-home"></span>HOME</a></li>
                <li><a href="./news.html"><span class="icon icon-news"></span>NEWS</a></li>
                <li><a href="./menu.html"><span class="icon icon-menu"></span>MENU</a></li>
                <li><a href="./access.html"><span class="icon icon-access"></span>ACCESS</a></li>
                <li><a href="./gallery.html"><span class="icon icon-gallery"></span>GALLERY</a></li>
                <li><a href="./blog.html"><span class="icon icon-blog"></span>BLOG</a></li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="mainvisual ">
      <div class="container page-title">

	  <h2 class="font-serif text-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img-home-mainvisual-effect.png" alt="HOME VISUAL" /></h2>

      </div>
    </div>

  </header>


  <main id="wrap-container" role="main">
