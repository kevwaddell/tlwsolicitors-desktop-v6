<?php  
$news_page_ID = get_option('page_for_posts');

$topics_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'hierarchical'       => 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc'
); 
$topics = get_categories($topics_args);	
?>
<div class="col-xs-6">
		
	<?php if ($topics) { ?>
		<a href="<?php echo get_permalink($news_page_ID); ?>" class="header-link"><?php echo get_the_title($news_page_ID); ?>: Categories</a>
		
		<div class="list-block">
			<ul class="list-unstyled">
		<?php foreach ($topics as $topic) { ?>

				<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>
	
</div>