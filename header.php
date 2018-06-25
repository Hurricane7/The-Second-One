<!--
	Patryk Entsua - Mensah
	Dekarstwo-Kopernacki
	For IT Engineering
-->

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Powyższe trzy metatagi muszą być umieszczone *na samym początku* nagłówka.
      Pozostałą treść *trzeba* umieścić poniżej tych tagów. -->
    <link rel="icon" href="http://www.dekarstwo-kopernacki.pl/wp-content/uploads/2018/04/Favicon-32x32.png">
    <title>
      <?php
        wp_title( '|', true, 'right' );
        bloginfo('name');
      ?>
      </title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  <div id="main-container">
  <?php if ( is_home() && is_front_page() ) : ?>
    <header class="front-page">
  <?php else : ?>
    <header class="page">
  <?php endif; ?>

        <nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                              <div id="logo">  <img alt="" src= "http://www.dekarstwo-kopernacki.pl/wp-content/uploads/2018/03/LOGO2.png"> </div>         
						</div>
						<!-- Menu options -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            
							<ul id="menu" class="nav navbar-nav navbar-right main_menu">
                                <li class=""><a href="/">Strona główna</a></li>
								<li class=""><a href="/o-nas">o nas</a></li>
								<li class=""><a href="/oferta">oferta</a></li>
								<li class=""><a href="/realizacje">realizacje</a></li>
								<li class=""><a href="/kontakt">kontakt</a></li>
                                <div style="width:130px; float:right;"></div>
							</ul>
													</div>
					</nav>
          <?php if ( is_home() && is_front_page() ) : ?>
              <div id="mainimg">  <!--<img alt="" src="http://www.dekarstwo-kopernacki.pl/wp-content/uploads/2018/03/Główne-zdjęcie.jpg">--> </div
          <?php endif; ?>
        
    </header>


