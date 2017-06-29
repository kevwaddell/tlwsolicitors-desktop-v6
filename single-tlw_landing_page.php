<?php get_header('landing'); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$form = get_field('lp_form');
$form_active = get_field('lp_form_active');
$all_forms_active = get_field('all_forms_active', 'option');
$banner_type = get_field('lp_banner_type');
 ?>	
	
<main id="main-content" class="page-wrapper">
	<!-- BANNER SECTION -->
	
	<?php if ($banner_type == 'img') { ?>
		<?php get_template_part( 'parts/landingPage/banner', 'img' ); ?>		
	<?php } ?>
	<?php if ($banner_type = 'video') { ?>
		<?php get_template_part( 'parts/landingPage/banner', 'video' ); ?>		
	<?php } ?>
				
	<?php get_template_part( 'parts/global/freephone', 'number' ); ?>
	<?php get_template_part( 'parts/global/color', 'strip' ); ?>
	
	<?php get_template_part( 'parts/landingPage/panels', 'sidebar' ); ?>
	
	<!-- MAIN TEXT SECTION -->			 	
 	<?php get_template_part( 'parts/landingPage/section', 'content' ); ?>


	<?php if ($form_active && $all_forms_active) { ?>
	<?php get_template_part( 'parts/landingPage/contact', 'form' ); ?>		
	<?php } ?>
	
</main>
		
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('landing'); ?>