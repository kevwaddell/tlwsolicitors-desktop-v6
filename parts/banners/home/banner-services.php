<?php  
//echo '<pre class="debug">';print_r($banner_bg_img);echo '</pre>';
$hp_banner_quick_links = get_field('hp_banner_quick_links', 'option');	
?>
<section id="top-banner" class="hp-banner">

	<div class="container">
		<ul class="text-center list-unstyled banner-links-imgs">
		<?php foreach ($hp_banner_quick_links as $bl) { 
		$thumb_id = get_post_thumbnail_id($bl['link_page']);
		$bg_full_src = wp_get_attachment_image_src($thumb_id, 'full' );
		//$bg_thumb_src = wp_get_attachment_image_src($thumb_id, 'thumbnail' );	
		$image_data = file_get_contents($bg_full_src[0]);
		$encoded_image = base64_encode($image_data);
		?>
			<li>
				<a href="<?php echo get_permalink($bl['link_page']); ?>" class="services-nav-link">
					<span class="img" style="background-image: url(data:image/png;base64,<?php echo $encoded_image; ?>)"></span>
					<span class="title"><span><?php echo get_the_title($bl['link_page']); ?></span></span>
				</a>
			</li>
		<?php } ?>
		</ul>
	</div>
	
</section>