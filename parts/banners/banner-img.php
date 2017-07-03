<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	
$img_post = get_the_ID();

if (empty($page_icon)) {
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