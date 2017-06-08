<?php if ( have_posts() ): ?>
<div class="page-links top-page-links">
	<div class="container">
		<?php wp_pagenavi(); ?>
	</div>
</div>	
<div class="rule"></div>
<section class="page-content post-grid">	
		<div class="container">
			<div class="row">
			<?php
			$cols = array("purple", "green", "pink", "orange", "blue");	
			$post_counter = 0;
			?>
			<?php while ( have_posts() ) : the_post();
			$date = get_the_date('l - jS F - Y');
			$img_post = get_the_ID();
			$post_thumbnail_id = get_post_thumbnail_id($img_post);
			$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
			$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
			//echo '<pre>';print_r($banner_feat_thumb_src);echo '</pre>';
			?>	
				<div class="col-xs-4">
				<article <?php post_class(); ?> data-src="<?php echo $banner_feat_full_src[0]; ?>" style="background-image: url(<?php echo $banner_feat_thumb_src[0] ;?>)">
					<a href="<?php esc_url( the_permalink() ); ?>" class="article-link" title="View: <?php the_title_attribute(); ?> article" rel="bookmark">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $date; ?></time>
						<span class="title"><?php the_title(); ?></span>
					</a>
				</article>
				</div>
			<?php $post_counter++; ?>
			<?php endwhile; ?>	
			</div>			
		</div>	
</section>
<div class="rule"></div>
<div class="page-links btm-page-links">
	<div class="container">
		<?php wp_pagenavi(); ?>
	</div>
</div>	
<?php else: ?>

<h3 class="text-center">Sorry</h3>
<p class="text-center">There is no news at the moment.</p>	

<?php endif; ?>