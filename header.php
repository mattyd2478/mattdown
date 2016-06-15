<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
			<link href="<?php echo get_template_directory_uri(); ?>/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					
					
					<!-- start top header -->
					<header class="header" role="banner">
							
						<div class="top-bar" id="top-bar-menu">
							<div class="top-bar-left float-left">
								<ul class="menu">
									<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
								</ul>
							</div>
							<div class="top-bar-right show-for-medium">
								<?php joints_top_nav(); ?>	
							</div>
							<div class="top-bar-right float-right show-for-small-only">
								<ul class="menu">
									<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
									<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
								</ul>
							</div>
						</div>
		 	
					</header><!-- end .header -->