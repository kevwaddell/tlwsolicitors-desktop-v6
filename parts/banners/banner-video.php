<?php 
$banner_parts = get_field('banner_parts');
$banner_title_active = get_field('banner_title_active');
?>
<?php //echo '<pre>';print_r($banner_quick_links);echo '</pre>'; ?>
<section id="video-banner" class="top-banner-video">
	
	<div class="container">

		<div class="row">			
			<div class="col-xs-10 col-xs-offset-1">
				<?php foreach ($banner_parts as $bp) { ?>
				<?php if ($bp['acf_fc_layout'] == "banner-video") { 
				$video_mp4 = $bp['video_mp4'];	
				$video_webm = $bp['video_webm'];	
				$video_poster = $bp['video_img'];
				?>
				<div class="video-wrapper">
					<video controls preload="auto" id="service-video" poster="<?php echo $video_poster;?>">
						<source src="<?php echo $video_webm; ?>" type="video/webm" />
						<source src="<?php echo $video_mp4; ?>" type="video/mp4" />
					</video>
				</div>
				<?php } ?>
				<?php } ?>
				<header class ="banner-title font-slab-serif caps text-center">
						<span><?php the_title(); ?></span>
				</header>
			</div>
		</div>

	</div>
	
</section>
<div class="rule"></div>