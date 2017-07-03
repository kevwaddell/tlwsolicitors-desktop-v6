<?php 
/*
Template Name: Toolkits archive page
*/
 ?>
 <?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$sections_active = get_field('sections_active');
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">	
		
		<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
		
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>		
		
		<!-- TOOLKITS GRID -->
		<?php get_template_part( 'parts/sections/section', 'toolkits' ); ?>
		
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'faqs-section') { ?>
				<!-- FAQ'S SECTION -->
					<?php get_template_part( 'parts/sections/section', 'faqs' ); ?>	
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
					<?php get_template_part( 'parts/sections/section', 'form' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- BLOG SECTION -->
					<?php get_template_part( 'parts/sections/section', 'blog' ); ?>		
				<?php } ?>

			<?php } ?>
		
		<?php } ?>
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
