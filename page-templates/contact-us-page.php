<?php 
/*
Template Name: Contact Us Page
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$sections_active = get_field('sections_active');

if ( has_post_thumbnail() ) {
$img_post = get_the_ID();
}

 ?>	

<main <?php post_class('page-col-red'); ?>>
		
	<?php get_template_part( 'parts/banners/contact/banner', 'intro' ); ?>	
	
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
				
				<?php if ($section['acf_fc_layout'] == 'location-map') { ?>
				<!-- LOCATION SECTION -->
				<?php get_template_part( 'parts/sections/section', 'location' ); ?>		
				<?php } ?>
	
			<?php } ?>
		
		<?php } ?>
		
</main>
		
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
