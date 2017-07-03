<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	
$video_webm = get_field( 'lp_video_webm', $post->ID );
$video_mp4 = get_field( 'lp_video_mp4', $post->ID );
$poster_img_id = get_field( 'lp_video_poster', $post->ID );
$poster_full_src = wp_get_attachment_image_src($poster_img_id, 'full' );
?>
<section id="video-banner" class="top-banner-video">
	
	<div class="container">

		<div class="row">			
			<div class="col-xs-10 col-xs-offset-1">
				<div class="video-wrapper">
					<video controls preload="auto" id="service-video" poster="<?php echo $poster_full_src[0];?>">
						<source src="<?php echo $video_webm; ?>" type="video/webm" />
						<source src="<?php echo $video_mp4; ?>" type="video/mp4" />
					</video>
				</div>
				<header class ="banner-title font-slab-serif caps text-center">
						<span><?php the_title(); ?></span>
				</header>
			</div>
		</div>

	</div>
	
</section>