<?php  
global $hide_title;
global $children;
global $post;
global $banner_type;	
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
?>
<article <?php post_class("content-section"); ?>>
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container">
			
		<div class="row">

			<div class="col-xs-10">
				
				<div class="entry">
					
					<div class="main-txt">
						<?php if (!empty($post_content['extended'])) { ?>
						<?php echo $content_main;  ?>
						<div id="content-extra" class="closed">
							<div id="content-extra-inner">
								<button id="close-content-extra-btn" class="btn btn-default"><i class="fa fa-times"></i><span class="sr-only">Close</span></button>
								<?php echo $content_extended;  ?>
							</div>
						</div>
						
						<?php } else { ?>
						<?php the_content(); ?>
						<?php } ?>
					</div>
																
				</div>
				
			</div>
			
			<div class="col-xs-2">
			<?php get_sidebar(); ?>
			</div>
			
		</div>
		
		<?php if (!empty($post_content['extended'])) { ?>
		<button id="continue-read-btn" class="btn btn-default btn-block font-slab-serif caps"><?php echo $more_btn_text; ?><i class="fa fa-plus-circle"></i></button>
		<?php } ?>
									
	</div>
	
	<?php if (!empty($children)) { ?>
	<div class="rule"></div>
	<nav class="child-page-links">
		<div class="container">
		<?php foreach ($children as $child) { ?>
			<a href="<?php echo get_permalink($child->ID); ?>" class="btn btn-default"><?php echo get_the_title($child->ID); ?></a>
		<?php } ?>
		</div>
	</nav>		
	<?php } ?>

	
</article>