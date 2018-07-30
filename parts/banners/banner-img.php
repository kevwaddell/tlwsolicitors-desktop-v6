<?php 
global $post;
$page_icon = get_field('page_icon', $post->ID);	

//echo '<pre>';print_r($img_post);echo '</pre>';

if (is_post_type_archive( 'tlw_vacancies_cpt' )) {
global  $img_post;
$page_icon = get_field('page_icon', $img_post->ID);		
} else {
$img_post = $post;	
}


if (empty($page_icon) && !is_post_type_archive( 'tlw_vacancies_cpt' )) {
$page_icon = get_field('page_icon', $post->post_parent);	
}
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container">
		<header class ="banner-title font-slab-serif caps">
			<?php echo get_the_title($img_post); ?>
		</header>
		<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)"></div>
		<i class="fa <?php echo $page_icon; ?>"></i>
	</div>
</section>
<div class="rule"></div>