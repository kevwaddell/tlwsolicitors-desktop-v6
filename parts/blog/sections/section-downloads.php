<?php 
$section_title = get_field( "downloads_section_title");	
$download_files = get_field( "download_section_files");		
?>
<div class="rule"></div>
<section id="downloads-section" class="pg-section">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
	
		<?php if ( !empty($download_files) ) { ?>
		<div class="download-items">
		
			<?php foreach ($download_files as $k => $file) { 
			$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
			?>
			<div class="text-center download-item">
				<a href="<?php echo $file['file']; ?>" target="_blank">
					<span class="cover-img"><img src="<?php echo $img[0]; ?>" height="120" /></span>
					<span class="dwnload-title"><?php echo $file['file_name']; ?></span>
				</a>
			</div>
			<?php } ?>
	
		</div>
		<?php } ?>
	
	</div>
		
</section>