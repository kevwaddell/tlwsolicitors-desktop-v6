<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
		<header class ="banner-title font-slab-serif caps">
			<?php the_title(); ?>
		</header>
		<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
		<i class="fa <?php echo $page_icon; ?>"></i>
	</div>
</section>
<div class="rule"></div>