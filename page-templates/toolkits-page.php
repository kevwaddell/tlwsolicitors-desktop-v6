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
		
		<!-- BANNER SECTION -->
		<?php if (has_post_thumbnail()) { 	?>
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
		<?php } ?>		
		
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>		
		
		<!-- MAIN TEXT SECTION -->
		<?php get_template_part( 'parts/sections/section', 'content' ); ?>
		
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
