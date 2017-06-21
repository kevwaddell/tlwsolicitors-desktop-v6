<?php 
/*
Template Name: Toolkit page
*/
 ?>

<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$freephone_num = get_field('freephone_num', 'option');
		$color = get_field('page_colour');
		$page_icon = get_field('page_icon');
		$banner_active = get_field('banner_active');
		$slides_active = get_field('tk_slides_active');
		$sections_active = get_field('sections_active');
		$quick_links = array();

		if ( has_post_thumbnail() ) {
		$img_post = get_the_ID();
		}
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">
		
		<!-- BANNER SECTION -->
		<?php if ($banner_active) { ?>

		<?php get_template_part( 'parts/banners/banner', 'slim-img' ); ?>			
					
		<?php } ?>	
		
		<!-- FREEPHONE NUMBER SECTION -->
		<?php get_template_part( 'parts/global/freephone', 'number' ); ?>
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>		
		
		<?php get_template_part( 'parts/sections/section', 'content' ); ?>	
		
		<!-- TOOLKIT SLIDES SECTION -->
		<?php if ($slides_active) { ?>
		<?php get_template_part( 'parts/sections/section', 'toolkit-info' ); ?>		
		<?php } ?>
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
			
			<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
				<!-- VIDEO SECTION -->
					<?php get_template_part( 'parts/sections/section', 'video' ); ?>	
				<?php } ?>
				
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
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- DOWNLOADS SECTION -->
					<?php get_template_part( 'parts/sections/section', 'downloads' ); ?>			
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- TOOLKIT SECTION -->
					<?php get_template_part( 'parts/sections/section', 'toolkit' ); ?>	
				<?php } ?>
	
			<?php } ?>
		
		<?php } ?>
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
