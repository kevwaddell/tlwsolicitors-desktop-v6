<?php get_header(); ?>

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
			$all_forms_active = get_field('all_forms_active', 'option');
			$form_active = get_field('add_form');	
			
			$quick_links = array();
			?>	
			<!-- MAIN CONTENT START -->
			
			<main id="main-content">
				
				<?php include (STYLESHEETPATH . '/_/inc/vacancies/sections/main-content-section.inc'); ?>
				
				<?php if ($form_active && $all_forms_active) { ?>
				<?php get_template_part( 'parts/vacancies/section', 'form' ); ?>
				<?php } ?>
				
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
