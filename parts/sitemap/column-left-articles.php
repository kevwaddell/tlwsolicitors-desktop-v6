<?php 
$news_page_ID = get_option('page_for_posts');

$subjects_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'parent'		=> 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'ASC'
); 
$subjects = get_tags($subjects_args);	
?>

<div class="col-xs-6">
	
	<?php if ($subjects) { ?>
		<h3><?php echo get_the_title($news_page_ID); ?>: Tags</h3>
		
		<div class="list-block" style="text-transform: capitalize;">
			<?php wp_tag_cloud('smallest=20&largest=20&unit=px&separator= | '); ?>
		</div>
			
	<?php } ?>
	
</div>