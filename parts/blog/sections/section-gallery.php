<?php 
$gallery_imgs = get_field( "gallery_imgs");	
?>
<div class="rule"></div>
<section id="gallery-section" class="pg-section">
	<div class="container">
		<h2 class="section-header">Gallery</h2>
		
		<?php if ( !empty($gallery_imgs) ) { 
		$total = count($gallery_imgs);	
		?>
		<div class="gallery-items">
			<div class="gallery-items-inner">
				<?php foreach ($gallery_imgs as $k => $file) { ?>
				<div class="gallery-item <?php echo ($k == 0) ? ' active':''; ?>">
					<a href="<?php echo $file['sizes']['medium']; ?>" class="gallery-img-link block" style="background-image: url(<?php echo $file['sizes']['post-list-img']; ?>)"><i class="fa fa-plus"></i></a>
				</div>
				<?php } ?>
			</div>
			<div class="gallery-items-viewer text-center">
				<img src="<?php echo $gallery_imgs[0]['sizes']['medium']; ?>">
			</div>
		</div>
	<?php } ?>
	</div>	
</section>