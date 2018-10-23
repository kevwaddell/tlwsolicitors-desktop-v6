<?php
global $section;
$videos_active = $section['videos_active'];
$pg_temp = get_page_template_slug( get_the_ID());
//echo '<pre class="debug">';print_r($pg_temp);echo '</pre>';
?>

<?php if ($videos_active) { ?>

<?php 
$section_title = $section['section_title'];	
$download_section_files = $section['download_section_files'];
$videos = $section['videos'];
//echo '<pre>';print_r($videos);echo '</pre>';
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<?php if ($pg_temp == 'page-templates/videos-page.php') { ?>
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>			
		<?php } ?>
		
		<div class="row video-grid">
			<?php foreach ($videos as $k => $video) { 
			$video_webm = $video['video_webm'];
			$video_mp4 = $video['video_mp4'];
			$video_poster_id = $video['poster_img'];
			$poster_src = wp_get_attachment_image_src($video_poster_id, 'full' );
			?>
			<div class="<?php echo (count($videos) > 1) ? 'col-xs-6':'col-xs-10 col-xs-offset-1'; ?>">
			<div id="video-<?php echo ($k+1); ?>" class="video-wrapper">
				<video controls preload="auto" id="service-video-<?php echo ($k+1); ?>" poster="<?php echo $poster_src[0];?>">
					<source src="<?php echo $video_webm; ?>" type="video/webm" />
					<source src="<?php echo $video_mp4; ?>" type="video/mp4" />
				</video>
			</div>

			</div>
			<?php } ?>
		</div>
	</div>
	
</section>

<?php } ?>