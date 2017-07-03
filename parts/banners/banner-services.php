<?php  
$banner_parts = get_field('banner_parts');
//echo '<pre class="debug">';print_r($banner_parts);echo '</pre>';
?>
<section id="top-banner">
	<?php foreach ($banner_parts as $bp) { ?>
	<?php if ($bp['acf_fc_layout'] == "banner-links") { ?>
	<?php 
		$banner_service_links = $bp['banner_service_links'];
		$links_total = count($banner_service_links);
		?>
	<div class="container">	
		<ul class="text-center list-unstyled list-inline banner-links-imgs links-total-<?php echo $links_total; ?>">
			<?php foreach ($banner_service_links as $bl) { 
			$thumb_id = get_post_thumbnail_id($bl['link_page']);
			$bg_full_src = wp_get_attachment_image_src($thumb_id, 'full' );
			$bg_thumb_src = wp_get_attachment_image_src($thumb_id, 'thumbnail' );	
			?>
			<li>
				<a href="<?php echo get_permalink($bl['link_page']); ?>" class="services-nav-link">
					<span class="img has-bg-img" data-src="<?php echo $bg_full_src[0]; ?>" style="background-image: url(<?php echo $bg_thumb_src[0]; ?>)"></span>
					<span class="title"><span><?php echo get_the_title($bl['link_page']); ?></span></span>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	<?php } ?>
</section>