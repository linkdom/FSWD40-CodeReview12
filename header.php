<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php bloginfo("name"); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <nav class="navbar navbar-expand-md navbar-transparent bg-transparent" role="navigation">
        <div class="container">
      	<!-- Brand and toggle get grouped for better mobile display -->
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
      	</button>
      	<a class="navbar-brand" href="#">Home</a>
      		<?php
      		wp_nav_menu( array(
      			'theme_location'    => 'primary',
      			'depth'             => 2,
      			'container'         => 'div',
      			'container_class'   => 'collapse navbar-collapse',
      			'container_id'      => 'bs-example-navbar-collapse-1',
      			'menu_class'        => 'nav navbar-nav',
      			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      			'walker'            => new WP_Bootstrap_Navwalker(),
      		) );
      		?>
      	</div>
      </nav>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php bloginfo("name"); ?></h1>
          <p class="lead my-3"><?php bloginfo("description"); ?></p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
