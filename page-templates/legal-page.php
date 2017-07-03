<?php 
/*
Template Name: Legal pages template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$children_args = array(
		'sort_column' => 'menu_order',
		'hierarchical' => 0,
		'post_type' => 'page'
	);
	
	if ($post->post_parent == 0) {
	$children_args['parent'] = $post->ID;
	} else {
	$children_args['parent'] = $post->post_parent;	
	}
	
	$children = get_pages($children_args);	
	
	//echo '<pre>';print_r($children);echo '</pre>';
	
	if ( has_post_thumbnail() ) {
	$img_post = get_the_ID();
	}
	
	?>	
	<main id="main-content">
		
		<?php if (has_post_thumbnail()) { ?>
			<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
		<?php } ?>	
		
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>		
		
	 	<!-- MAIN TEXT SECTION -->
		<?php get_template_part( 'parts/sections/section', 'content' ); ?>	
	 	
	</main>
			
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
