<?php 
global $section; 
$toolkit_active = $section['toolkit_active'];		
?>
<?php if ($toolkit_active) { ?>

<?php 
$toolkit_page = $section['toolkit_page'];
$toolkit_page_parent = get_page($toolkit_page);
$pg = get_page_by_path($toolkit_page_parent->post_name."/toolkit");
$color = get_field('page_colour', $toolkit_page);
$toolkit_content = apply_filters('the_content', $pg->post_content );
$section_title = "TLW Toolkit";	
//echo '<pre class="debug">';print_r($toolkit_page_parent);echo '</pre>';
$page_icon = get_field('page_icon', $pg->ID);

$post_thumbnail_id = get_post_thumbnail_id( $pg->ID );
$feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="links-1 pg-section">
	
	<div class="bg-img" style="background-image: url(<?php echo $feat_img[0] ; ?>)"></div>
	
	<div class="container">
		<h2 class="section-header"><?php echo get_the_title($toolkit_page); ?> <?php echo get_the_title($pg->ID); ?></h2>
		<?php echo $toolkit_content; ?>
	
		<div class="links-wrapper">
			<a href="<?php echo get_permalink($pg->ID); ?>" class="toolkit-link">	
				<span>View Our <?php echo get_the_title($toolkit_page); ?> Toolkit</span>
			</a>
		</div>
	
	</div>
</section>

<?php } ?>