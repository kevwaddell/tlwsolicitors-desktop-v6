<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	
$video = get_field( 'lp_video', $post->ID );
$poster_img_id = get_field( 'lp_video_poster', $post->ID );
$poster_full_src = wp_get_attachment_image_src($poster_img_id, 'full' );
$poster_thumb_src = wp_get_attachment_image_src($poster_img_id, 'thumbnail' );
?>
<section id="video-banner" class="top-banner-video">
	
	<div class="container">

		<div class="row">			
			<div class="col-xs-6">
				<a href="#view-video" class="video-link has-bg-img poster-img" style="background-image: url(<?php echo $poster_thumb_src[0]; ?>)" data-src="<?php echo $poster_full_src[0]; ?>"></a>
			</div>
			<div class="col-xs-6">
				<div class="banner-panel text-center">
					<i class="fa fa-film panel-icon"></i>
					<span class="header caps block">Watch our short video</span>
					<div class="panel-txt">TLW have created a simple information video which may help you with the decisions you have to make when dealing with a Mis-sold SIPP Pension Investments.</div>
					<button id="view-video-btn" type="button" class="btn btn-default btn-block btn-lg">Watch now</button>
				</div>
			</div>
		</div>
		
		<header class ="banner-title font-slab-serif caps text-center">
			<?php the_title(); ?>
		</header>
		
	</div>
	
	<div class="hidden hidden-videos"><div id="view-video"><?php echo $video; ?></div></div>
	
</section>