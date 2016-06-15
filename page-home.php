<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>
				
				<div id="test-1" class="full-window-height">
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non bibendum eros, ut mattis enim. Etiam pretium lorem nulla, vel suscipit elit faucibus ultrices. Quisque sit amet semper tellus, eu laoreet risus. Nam tortor turpis, efficitur non convallis at, hendrerit ut orci. Fusce vel facilisis leo. Aliquam commodo semper nisl, nec ultricies tortor laoreet in. Vestibulum porta malesuada nunc vitae eleifend. Aenean sodales felis sed nunc scelerisque, eu semper libero tristique. Sed ornare rhoncus facilisis. Nunc odio nulla, sodales sed ultricies vitae, venenatis non felis. Suspendisse volutpat dui ante, id blandit quam malesuada pharetra. Aliquam ut purus erat. Nam commodo eget justo a sollicitudin.</p>
					
				</div>	
				<div id="test-2" class="full-window-height">
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non bibendum eros, ut mattis enim. Etiam pretium lorem nulla, vel suscipit elit faucibus ultrices. Quisque sit amet semper tellus, eu laoreet risus. Nam tortor turpis, efficitur non convallis at, hendrerit ut orci. Fusce vel facilisis leo. Aliquam commodo semper nisl, nec ultricies tortor laoreet in. Vestibulum porta malesuada nunc vitae eleifend. Aenean sodales felis sed nunc scelerisque, eu semper libero tristique. Sed ornare rhoncus facilisis. Nunc odio nulla, sodales sed ultricies vitae, venenatis non felis. Suspendisse volutpat dui ante, id blandit quam malesuada pharetra. Aliquam ut purus erat. Nam commodo eget justo a sollicitudin.</p>
					
				</div>
				
				<div id="test-3" >
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non bibendum eros, ut mattis enim. Etiam pretium lorem nulla, vel suscipit elit faucibus ultrices. Quisque sit amet semper tellus, eu laoreet risus. Nam tortor turpis, efficitur non convallis at, hendrerit ut orci. Fusce vel facilisis leo. Aliquam commodo semper nisl, nec ultricies tortor laoreet in. Vestibulum porta malesuada nunc vitae eleifend. Aenean sodales felis sed nunc scelerisque, eu semper libero tristique. Sed ornare rhoncus facilisis. Nunc odio nulla, sodales sed ultricies vitae, venenatis non felis. Suspendisse volutpat dui ante, id blandit quam malesuada pharetra. Aliquam ut purus erat. Nam commodo eget justo a sollicitudin.</p>
					
				</div>								

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

		<?php get_footer(); ?>


	</div> <!-- end #content -->


