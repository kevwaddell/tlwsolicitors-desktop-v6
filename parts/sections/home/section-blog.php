<?php
global $section;
$posts_active = $section['posts_active'];
?>

<?php if ($posts_active) { ?>
<?php
$section_title = $section['section_title'];	

if (empty($section_title)) {
$section_title = "Recent blog articles";
}

$number_of_posts = $section['number_of_posts'];

if (empty($number_of_posts)) {
$number_of_posts = 3;	
}

$recent_posts_args = array (
'posts_per_page' => $number_of_posts,
);

$from_category_active = $section['from_category'];

if ($from_category_active) {
$blog_categories = $section['blog_categories'];	
$recent_posts_args['category__in'] = $blog_categories;

	if ( date("n") >= 4 ) {
	$recent_posts_args['year'] = date("Y");
	}
}

$recent_posts = get_posts($recent_posts_args);

//echo '<pre class="debug">';print_r($recent_posts);echo '</pre>';
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
		</div>	
		<div id="posts-list-carousel" class="posts-list carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
			<?php foreach ($recent_posts as $k => $rpost) { 
			$ID = $rpost->ID;
			$date = get_the_date('F jS Y', $ID);
			?>
			<div class="item<?php echo ($k === 0) ? " active":""; ?>">
				<div class="container">
					<div class="recent-post">
						<time class="article-date" datetime="<?php get_the_date( 'Y-m-d',  $ID); ?>"><?php echo $date; ?></time>
						<h3><a href="<?php echo get_permalink($ID); ?>"><?php echo get_the_title($ID); ?></a></h3>
						<a href="<?php echo get_permalink($ID); ?>" class="view-post-btn">View Article</a>
					</div>
				</div>
			</div>
			<?php } ?>
			</div>
		</div>
			
		<div class="container">
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