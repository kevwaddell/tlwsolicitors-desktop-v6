<?php  
global $section;
$downloads_active = $section['downloads_active'];		
?>
<?php if ($downloads_active) { ?>

<?php 
$section_title = $section['section_title'];	
$download_section_files = $section['download_section_files'];
?>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>
		<div class="row">
		
			<?php foreach ($download_section_files as $k => $file) { 
			$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
			?>
			<div class="col-xs-3">
				<a href="<?php echo $file['file_download']; ?>" class="download-link" target="_blank">
					<span class="bg-img"><span class="inner" style="background-image: url(<?php echo $img[0]; ?>)"></span></span>
					<span class="title"><span><?php echo $file['file_title']; ?></span></span>
				</a>
			</div>
			<?php } ?>
	
		</div>
	
	</div>
		
</section>
<?php } ?>