<?php 
global $img_post;
global $page_icon;
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
		<header class ="banner-title font-slab-serif caps">
			<?php if (is_home()) { ?>
			latest from <?php bloginfo('name'); ?>
			<?php } ?>
			<?php if (is_category()) { ?>
			Category: <?php single_cat_title(); ?>
			<?php } ?>
			<?php if (is_day()) { ?>
			Archives: <?php echo get_the_date('M - j - Y'); ?>
			<?php } ?>
			<?php if (is_month()) { ?>
			Archives: <?php echo get_the_date('F - Y'); ?>
			<?php } ?>
			<?php if (is_year()) { ?>
			Archives: <?php echo get_the_date('Y'); ?>
			<?php } ?>
		</header>
		<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
		<i class="fa <?php echo $page_icon; ?>"></i>
	</div>
</section>