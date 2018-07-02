<?php get_header(); ?>	
		
	<?php get_template_part( 'parts/global/awards', 'banner' ); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$hp_sections = get_field('hp_sections', 'option');
		$banner_active = get_field('hp_top_banner_active', 'option');	
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">
		
		<!-- BANNER SECTION -->
		<?php if ($banner_active) { ?>
		<?php get_template_part( 'parts/banners/home/banner', 'services' ); ?>		
		<?php } ?>
		
		<!-- HOME PAGE FORM SECTION -->
		<?php get_template_part( 'parts/sections/home/section', 'form' ); ?>
		
		<!-- MAIN TEXT SECTION -->
		
		<?php get_template_part( 'parts/sections/home/section', 'content' ); ?>
		
		<?php if (!empty($hp_sections)) { ?>		
			<?php foreach ($hp_sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
				<!-- VIDEOS SECTION -->
					<?php get_template_part( 'parts/sections/home/section', 'video' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php get_template_part( 'parts/sections/home/section', 'feedback' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- BLOG SECTION -->
					<?php get_template_part( 'parts/sections/home/section', 'blog' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- DOWNLOADS SECTION -->
					<?php get_template_part( 'parts/sections/home/section', 'downloads' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- TOOLKIT SECTION -->
					<?php get_template_part( 'parts/sections/home/section', 'toolkit' ); ?>	
				<?php } ?>

			<?php } ?>
		<?php } ?>
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
