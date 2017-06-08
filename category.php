<?php get_header(); ?>

	<!-- MAIN CONTENT START -->

<?php
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
$page_icon = get_field('page_icon', $news_page->ID);
	
	if ( has_post_thumbnail($news_page_id) ) {
	$img_post = get_page($news_page_id);
	}
?>

<!-- PAGE TOP SECTION -->
<main id="main-content">
	
	<?php if ($img_post) { ?>
	<?php get_template_part( 'parts/blog/banner', 'index' ); ?>		
	<?php } ?>
		
	<!-- PAGE TOP BAR SECTION -->
	<?php get_template_part( 'parts/blog/topbar', 'index' ); ?>	
	
	<!-- POSTS LIST -->
	<?php get_template_part( 'parts/blog/posts', 'list' ); ?>	

</main>		
<!-- MAIN CONTENT CONTAINER END -->
	
<?php get_footer(); ?>
