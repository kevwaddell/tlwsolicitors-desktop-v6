<?php global $img_post; ?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
	<header class ="banner-title font-slab-serif caps">		
		<?php echo get_the_title($img_post); ?>
	</header>
	<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
	<i class="fa fa-user-plus"></i>
	</div>
</section>