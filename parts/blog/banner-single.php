<?php 
$img_atts = array('class'	=> "img-responsive");
$img_post = get_the_ID();
$date = get_the_date('l - jS F - Y');
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
		<header class ="banner-title font-slab-serif caps">
			<?php echo $date; ?>
		</header>
		<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
	</div>
</section>