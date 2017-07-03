<?php 
/*
Template Name: Newsletter sign up template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
			<?php
			$sections_active = get_field('sections_active');
			 ?>	
			 <main id="main-content">
				 	
				
				<?php if (has_post_thumbnail()) { ?>
				<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
				<?php } ?>	
				
				<?php get_template_part( 'parts/global/color', 'strip' ); ?>		

				<!-- MAIN TEXT SECTION -->
				<?php get_template_part( 'parts/sections/section', 'content' ); ?>
					
				
					<?php if ($sections_active) { 
					$sections = get_field('sections'); 
					?>		
		
					<?php foreach ($sections as $section) { ?>
						
						<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
						<!-- FORM SECTION -->
							<?php get_template_part( 'parts/sections/section', 'form' ); ?>	
						<?php } ?>
						
						<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
						<!-- FORM SECTION -->
							<?php get_template_part( 'parts/sections/section', 'blog' ); ?>		
						<?php } ?>
			
					<?php } ?>
				
				<?php } ?>

			 
			 </main>
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
