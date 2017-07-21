<?php 
/*
Template Name: Why Choose TLW page template
*/
 ?>
 
  
<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$sections_active = get_field('sections_active');
		$banner_active = get_field('banner_active');	
		$exclude_quotes = array();
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">
		
		<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php get_template_part( 'parts/sections/section', 'feedback' ); ?>	
				<?php } ?>
				
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
