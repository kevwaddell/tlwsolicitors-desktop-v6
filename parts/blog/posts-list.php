<?php if ( have_posts() ): 	?>
<section class="pg-section post-grid">	
		<div class="container">
			<h2 class="section-header">
			<?php if (is_home()) { ?>
			Latest from <?php bloginfo('name'); ?>
			<?php } ?>
			<?php if (is_category()) { ?>
			Category: <?php single_cat_title(); ?>
			<?php } ?>
			<?php if (is_tag()) { ?>
			Tag: <?php single_tag_title(); ?>
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
			</h2>
			<div class="row">
			<?php
			$cols = array("purple", "green", "pink", "orange", "blue");	
			$post_counter = 0;
			$posts_per_page = get_query_var('posts_per_page');
			//echo '<pre>';print_r($posts_per_page);echo '</pre>';
			?>
			<?php while ( have_posts() ) : the_post();
			$date = get_the_date('l - jS F - Y');
			$img_post = get_the_ID();
			$post_thumbnail_id = get_post_thumbnail_id($img_post);
			$banner_feat_src = wp_get_attachment_image_src($post_thumbnail_id, 'medium' );
			$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
			//echo '<pre>';print_r($banner_feat_thumb_src);echo '</pre>';
			$post_counter++;
			//echo '<pre>';print_r($wp_query['query_vars']->posts_per_page);echo '</pre>';
			?>	
				<div class="col-xs-4">
				<article <?php post_class(); ?>>
					<a href="<?php esc_url( the_permalink() ); ?>" class="article-link" title="View: <?php the_title_attribute(); ?> article" rel="bookmark">
						<span class="link-bg-img" style="background-image: url(<?php echo $banner_feat_src[0]; ?>)"></span>
						<span class="title"><span><?php the_title(); ?></span></span>
					</a>
				</article>
				</div>
			<?php if ( ($post_counter % 3 == 0) && ($post_counter < $posts_per_page)) { ?>
			</div>
			<div class="row">		
			<?php } ?>
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