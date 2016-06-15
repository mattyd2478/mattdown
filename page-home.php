<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php //get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>
				
				<div id="top-video">
					<div class="homepage-hero-module">
					    <div class="video-container">
					        <div class="filter"></div>
					        <video autoplay loop class="fillWidth">
					            <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/Procrastination.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
					            <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/Procrastination.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
					        </video>
					        <div class="poster hidden">
					            <img src="PATH_TO_JPEG" alt="">
					        </div>
					    </div>
					</div>
				</div>
				
				
				<div id="block-1" class="half-height half-width-wrap">

					<div class="half-width red padded">
						Left
					</div>
					<div class="half-width blue padded vert-center horiz-center">
						<div class="test-box">Test Box</div>
					</div>					
				</div>								

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

		<?php get_footer(); ?>


	</div> <!-- end #content -->


