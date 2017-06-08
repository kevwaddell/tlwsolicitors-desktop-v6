<?php
global $section;
$videos_active = $section['videos_active'];
//echo '<pre>';print_r($section);echo '</pre>';
?>

<?php if ($videos_active) { ?>

<?php 
$section_title = $section['section_title'];	
$download_section_files = $section['download_section_files'];
$videos = $section['videos'];
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section with-icon-logo">
	
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<div class="row">
			<?php foreach ($videos as $k => $poster) { 
			$poster_full_src = wp_get_attachment_image_src($poster['poster_img'], 'full' );
			$poster_thumb_src = wp_get_attachment_image_src($poster['poster_img'], 'thumbnail' );	
			$video = $video['video'];
			?>
			<div class="col-xs-<?php echo (count($videos) > 1) ? '6':'6 col-xs-offset-3'; ?>">
				<a href="#video-<?php echo ($k+1); ?>" class="video-link full-bg-img poster-img" style="background-image: url(<?php echo $poster_thumb_src[0]; ?>)" data-src="<?php echo $poster_full_src[0]; ?>"></a>
			</div>
			<?php } ?>
		</div>
	</div>
	
	<div class="hidden hidden-videos">
		<?php foreach ($videos as $k => $video) { 
			$video = $video['video'];
			?>
			<div id="video-<?php echo ($k+1); ?>">
				<?php echo $video; ?>
			</div>
		<?php } ?>
	</div>
	
</section>

<?php } ?>