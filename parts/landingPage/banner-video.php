<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	
$video = get_field( 'lp_video', $post->ID );
$poster_img_id = get_field( 'lp_video_poster', $post->ID );
$poster_full_src = wp_get_attachment_image_src($poster_img_id, 'full' );
$poster_thumb_src = wp_get_attachment_image_src($poster_img_id, 'thumbnail' );
?>
<section id="video-banner-v2" class="top-banner-video">
	
	<div class="container">

		<div class="row">			
			<div class="col-xs-8 col-xs-offset-2">
				<a href="#view-video" class="video-link has-bg-img poster-img" style="background-image: url(<?php echo $poster_thumb_src[0]; ?>)" data-src="<?php echo $poster_full_src[0]; ?>"></a>
				<header class ="banner-title font-slab-serif caps text-center">
						<span><?php the_title(); ?></span>
				</header>
			</div>
		</div>

	</div>
	
	<div class="hidden hidden-videos"><div id="view-video"><?php echo $video; ?></div></div>
	
</section>