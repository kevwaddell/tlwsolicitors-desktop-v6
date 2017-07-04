<?php get_header(); ?>

<?php
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
$page_icon = get_field('page_icon', $news_page->ID);

if ( has_post_thumbnail($news_page_id) ) {
$img_post = $news_page;
}
?>

<!-- MAIN CONTENT START -->
<main id="main-content">	
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<!-- POSTS LIST -->
	<?php get_template_part( 'parts/blog/posts', 'list' ); ?>		
	
	<!-- DROPDOWN SECTION -->
	<?php get_template_part( 'parts/blog/index', 'dropdowns' ); ?>

</main>
<!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
