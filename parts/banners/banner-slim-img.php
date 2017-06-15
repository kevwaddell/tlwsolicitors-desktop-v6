<?php 
global $post;
if ($post->post_parent == 0) {
$page_icon = get_field('page_icon', $post->ID);	
} else {
$page_icon = get_field('page_icon', $post->post_parent);	
}
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
		<header class ="banner-title font-slab-serif caps">
			<?php echo get_the_title($post->post_parent); ?>
		</header>
		<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
		<i class="fa <?php echo $page_icon; ?>"></i>
	</div>
</section>