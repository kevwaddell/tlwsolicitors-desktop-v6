<?php get_header('landing'); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$freephone_num = get_field('freephone_num', 'option');
$form = get_field('lp_form');
$form_active = get_field('lp_form_active');
$page_icon = get_field('page_icon');
$all_forms_active = get_field('all_forms_active', 'option');
 ?>	
	
<main id="main-content" class="page-wrapper">
	<!-- BANNER SECTION -->
	<?php get_template_part( 'parts/landingPage/banner', 'img' ); ?>			
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