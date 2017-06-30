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
		<div class="video-banner-inner">
			<div class="video-header font-slab-serif caps txt-col-wht">TLW Solicitors Information Videos
				<div class="icons pull-right"><i class="fa fa-film"></i><i class="fa fa-video-camera"></i><i class="fa fa-youtube-play"></i></div>
			</div>
			<a href="" class="youtube-btn btn btn-default btn-block" target="_blank"><span class="sr-only">YouTube Channel</span></a>
			<button id="view-video-btn" class="btn btn-default btn-block font-slab-serif caps">Watch video</button>
			<div class="video-still has-bg-img" style="background-image: url(<?php echo $poster_thumb_src[0]; ?>)" data-src="<?php echo $poster_full_src[0]; ?>">
				<a href="#view-video" class="video-link" ><span class="sr-only">Watch video</span></a>
			</div>
		</div>
		<header class ="banner-title font-slab-serif caps text-center"><span><?php the_title(); ?></span><i class="fa <?php echo $page_icon; ?>"></i></header>
	</div>
	
	<div class="hidden hidden-videos"><div id="view-video"><?php echo $video; ?></div></div>
	
</section>