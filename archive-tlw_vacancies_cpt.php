<?php get_header(); ?>

<?php
$jobs_pg = get_page_by_title( "Vacancies" );
$content = apply_filters( 'the_content', $jobs_pg->post_content );
$all_forms_active = get_field('all_forms_active', 'option');
$form_active = get_field('add_form', $jobs_pg->ID);	
	
	if ( has_post_thumbnail($jobs_pg->ID) ) {
	$img_post = $jobs_pg;
	}
?>

<!-- MAIN CONTENT START -->
<main id="main-content">
	
	<?php if (has_post_thumbnail($jobs_pg->ID)) { ?>
		<?php get_template_part( 'parts/vacancies/banner', 'img' ); ?>	
		<?php get_template_part( 'parts/global/freephone', 'number' ); ?>
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>	
	<?php } ?>	
	
	<!-- MAIN TEXT SECTION -->	
	<?php get_template_part( 'parts/vacancies/archive', 'content' ); ?>
	
	<!-- VACANCIES LIST SECTION -->
	<?php get_template_part( 'parts/vacancies/section', 'post-list' ); ?>	
	
	<?php if ($form_active && $all_forms_active) { ?>
		<?php get_template_part( 'parts/vacancies/section', 'form' ); ?>
	<?php } ?>

</main>
<!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
