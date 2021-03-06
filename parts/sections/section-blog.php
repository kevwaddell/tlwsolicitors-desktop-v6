<?php  
global $section;
$blog_posts_active = $section['blog_posts_active'];		
?>
<?php if ($blog_posts_active) { ?>
			
<?php
$section_title = $section['section_title'];	
if (empty($section_title)) {
$section_title = "Recent blog articles";
}

$blog_categories = $section['blog_section_articles'];
$recent_posts_args = array (
'posts_per_page' => 3,
'category__in'	=> $blog_categories,
);

if ( date("n") >= 6 ) {
$recent_posts_args['year'] = date("Y");
}

//echo '<pre class="debug">';print_r( $recent_posts_args );echo '</pre>';

$recent_posts = get_posts($recent_posts_args);

//echo '<pre>';print_r($recent_posts);echo '</pre>';
?>
<?php if (!empty($recent_posts) ) { 
$cats_args = array(
	'hide_empty'               => 1,
	'hierarchical'             => 0
);
	
$cats = get_categories($cats_args);

$archives_args = array(
	'type'          => 'monthly',
	'limit'         => '12',
	'format'        => 'option',
	'echo'			=> 0
);
	
$archives = wp_get_archives($archives_args);
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<div class="row posts-grid">
			<?php foreach ($recent_posts as $k => $rpost) { 
			$ID = $rpost->ID;
			$thumb_id = get_post_thumbnail_id($ID);
			$bg_src = wp_get_attachment_image_src($thumb_id, 'medium' );
			?>
			<div class="col-xs-4">
				<a href="<?php echo get_permalink($ID); ?>" class="post-link" title="<?php echo the_title_attribute( array('before' => 'View article: ', 'post'=> $ID)); ?>">
					<span class="link-bg-img" style="background-image: url(<?php echo $bg_src[0]; ?>)"></span>
					<span class="title"><span><?php echo get_the_title($ID); ?></span></span>
				</a>
			</div>
			<?php } ?>
		</div>
		<div class="row blog-dropdowns">
				<div class="col-xs-6">
					<?php if ($cats) { ?>
					<select id="cats" class="selectpicker" data-width="100%">
						<option value="0" data-hidden="true">Blog Categories</option>
						<?php foreach ($cats as $cat) { 
						$category_id = 	$cat->term_id;
						?>
						<option value="<?php echo get_category_link( $category_id ); ?>"><?php echo get_cat_name($category_id); ?></option>
						<?php } ?>
					</select>
					<script type="text/javascript">
					<!--
					var cats_dropdown = document.getElementById("cats");
					function onCatsChange() {
						if ( cats_dropdown.options[cats_dropdown.selectedIndex].value != 0 ) {
							location.href = cats_dropdown.options[cats_dropdown.selectedIndex].value;
						}
					}
					cats_dropdown.onchange = onCatsChange;
					-->
				</script>

					<?php } ?>
				</div>
				<div class="col-xs-6">
					<?php if ($archives) { ?>
					<div class="cats-dropdown">
						
						<select id="archive-dd" class="selectpicker" data-width="100%">
							<option value="0" data-hidden="true">Blog Archives</option>
							<?php echo $archives; ?>
						</select>
						
					</div>
					<script type="text/javascript">
						<!--
						var dropdown = document.getElementById("archive-dd");
						function onArchiveChange() {
							if ( dropdown.options[dropdown.selectedIndex].value != 0 ) {
								location.href = dropdown.options[dropdown.selectedIndex].value;
							}
						}
						dropdown.onchange = onArchiveChange;
						-->
					</script>
					<?php } ?>
				</div>
			</div>
	</div>
</section>
<?php } ?>
<?php } ?>