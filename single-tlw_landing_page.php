<?php get_header('landing'); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$freephone_num = get_field('freephone_num', 'option');
$form = get_field('lp_form');
$form_active = get_field('lp_form_active');
$page_icon = get_field('page_icon');
$how_it_works_active = get_field('hiw_active');
$all_forms_active = get_field('all_forms_active', 'option');
 ?>	
<div class="lp-bg-img full-bg-img" style="background-image: url(<?php echo $bg_img_thumb_url; ?>)" data-src="<?php echo $bg_img_url; ?>">
	<div class="container">
	<h1><?php the_title(); ?></h1>	
	</div>
</div>		

<!-- MAIN CONTENT START -->
<div class="container">
	
<main id="main-content" class="page-wrapper">
		 	
 	<article <?php post_class(); ?>>
	 	
	<div class="row">
		 	
		 	<div class="col-xs-8">
					
			 	<div class="entry">

					<div class="main-txt">
					<?php the_content(); ?>
					</div>
					
			 	</div>
			
		 	</div>
		 	<div class="col-xs-4">
			 <?php get_template_part( 'parts/landingPage/panels', 'sidebar' ); ?>				 	
		 	</div>		
	</div>
	
	</article> 	

	
</main>
		
<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- MAIN CONTENT END -->

<?php if ($form_active && $all_forms_active) { ?>
<?php get_template_part( 'parts/landingPage/contact', 'form' ); ?>		
<?php } ?>

<?php get_footer('landing'); ?>