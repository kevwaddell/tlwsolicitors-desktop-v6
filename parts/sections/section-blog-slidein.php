<?php if (!is_single()) { ?>
			
<?php
$recent_posts_args = array (
'posts_per_page' => 3
);

if ( date("n") >= 6 ) {
$recent_posts_args['year'] = date("Y");
}

$recent_posts = get_posts($recent_posts_args);

//echo '<pre>';print_r($recent_posts);echo '</pre>';
?>
<section id="recent-blog-sb" class="slide-in-right sb-closed" style="display: none;">
		<div class="posts-list">
			<?php foreach ($recent_posts as $k => $rpost) { 
			$ID = $rpost->ID;
			$thumb_id = get_post_thumbnail_id($ID);
			$bg_src = wp_get_attachment_image_src($thumb_id, 'medium' );
			?>
			<a href="<?php echo get_permalink($ID); ?>" class="post-link" title="<?php echo the_title_attribute( array('before' => 'View article: ', 'post'=> $ID)); ?>">
				<span class="link-img" style="background-image: url(<?php echo $bg_src[0]; ?>)"></span>
				<span class="title"><span><?php echo get_the_title($ID); ?></span></span>
			</a>
			<?php } ?>
		</div>
		<div class="sb-btn">
			<button id="sb-actions-btn" class="animated"><?php bloginfo('name'); ?> <span>Blog</span></button>
		</div>
</section>
<?php } ?>