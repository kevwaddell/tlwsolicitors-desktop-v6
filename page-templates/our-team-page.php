<?php 
/*
Template Name: Team Profiles Page
*/
 ?>
 
 <?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$sections_active = get_field('sections_active');	
		
		$team_args = array (
		'posts_per_page'   => -1,
		'orderby'          => 'menu_order',
		'order'            => 'ASC',
		'post_type'        => 'tlw_team_cpt',
		);
		
		$profiles = get_posts($team_args);
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">	
		
		<?php if (!empty($profiles)) { ?>
		<?php get_template_part( 'parts/sections/section', 'team' ); ?>		
		<?php } ?>
		
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
				<?php } ?>>
				
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

