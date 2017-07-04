<?php get_header(); ?>

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
			$jobs_pg = get_page_by_title( "Vacancies" );
			$all_forms_active = get_field('all_forms_active', 'option');
			$form_active = get_field('add_form');
			
			if ( has_post_thumbnail($jobs_pg->ID) ) {
			$img_post = $jobs_pg;
			}	
			?>	
			<!-- MAIN CONTENT START -->
			
			<main id="main-content">	
	
				<?php get_template_part( 'parts/vacancies/section', 'content' ); ?>
				
				<?php if ($form_active && $all_forms_active) { ?>
				<?php get_template_part( 'parts/vacancies/section', 'form' ); ?>
				<?php } ?>
				
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
