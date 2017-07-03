<?php
$img_post = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id( $img_post );
$banner_img = wp_get_attachment_image_src($post_thumbnail_id, 'large' );
	
$freephone_num = get_field('freephone_num', 'options');
$office_tel = get_field('office_num', 'options');
$email = get_field('main_email', 'options');
//echo '<pre class="debug">';print_r($img);echo '</pre>';
?>
<section id="contact-us-banner" class="contact-links">
	<div class="container">
		<div class="img" style="background-image: url(<?php echo $banner_img[0];?>)"></div>
		<header class ="banner-title font-slab-serif caps">
			<?php the_title(); ?>
		</header>
		<div class="row">
			<div class="col-xs-7">
				<div class="intro">
					<p class="header">We can help 24/7<br>365 days a year</p>
					<p>You can contact us using any of the following methods</p>
				</div>
			</div>
		</div>
		
		<div class="contact-info">
			<a href="tel:<?php echo str_replace(" ", "", $office_tel); ?>" class="contact-info-link"><i class="fa fa-building-o"></i>Office: <?php echo $office_tel; ?></a>
			<a href="mailto:<?php echo $email; ?>" class="contact-info-link"><i class="fa fa-envelope-o"></i><?php echo $email; ?></a>
			<a href="#request-a-callback" class="contact-info-link jump-2-link"><i class="fa fa-paper-plane-o"></i>Request a Callback</a>	
		</div>
	</div>		
</section>