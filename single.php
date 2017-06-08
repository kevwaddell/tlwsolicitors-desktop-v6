<?php get_header(); ?>

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
			$download_active = get_field('download_active');
			$gallery_active = get_field('gallery_active');	
			$show_author = get_field('show_author');
			$all_forms_active = get_field('all_forms_active', 'option');
			$form_active = get_field('add_form');	
			$related_posts_active = get_field('related_posts_active');
			?>	
			<!-- MAIN CONTENT START -->
			
			<main id="main-content">
				<?php if (has_post_thumbnail()) { ?>	
				<?php get_template_part( 'parts/blog/banner', 'single' ); ?>
				<?php } ?>
				
				<?php get_template_part( 'parts/blog/sections/section', 'content' ); ?>
				
				<?php if ($gallery_active) { ?>
				<?php get_template_part( 'parts/blog/sections/section', 'gallery' ); ?>
				<?php } ?>
				
				<?php if ($download_active) { ?>
				<?php get_template_part( 'parts/blog/sections/section', 'downloads' ); ?>
				<?php } ?>
				
				<?php if ($form_active && $all_forms_active) { ?>
				<?php get_template_part( 'parts/blog/sections/section', 'form' ); ?>
				<?php } ?>
				
				<?php if ($related_posts_active) { ?>
				<?php get_template_part( 'parts/blog/sections/section', 'related-posts' ); ?>
				<?php } ?>
				
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
