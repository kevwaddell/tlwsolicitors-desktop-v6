<?php 
global $page_icon;
$post_thumbnail_id = get_post_thumbnail_id($img_post);
$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
//echo '<pre class="debug">';print_r($banner_feat_thumb_src);echo '</pre>';
?>

<section class="toolkit-banner has-bg-img" data-src="<?php echo $banner_feat_full_src[0]; ?>" style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
	<header class ="banner-title text-center bold">
		<?php if (!empty($page_icon)) { ?>
		<i class="fa <?php echo $page_icon; ?>"></i>			
		<?php } ?>
		<?php echo get_the_title($post->post_parent); ?>
	</header>
	
	<div class="img-overlay"></div>
</section>