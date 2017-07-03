<?php
$services_pgs = get_field('global_main_services', 'options');
//echo '<pre>';print_r($services_pgs);echo '</pre>';

$services_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'include'		=> $services_pgs,
'order'			=> 'ASC'
);

$services = get_posts($services_args);
//echo '<pre>';print_r($landing_pgs);echo '</pre>';
?>

<div class="col-xs-6">
	
	<?php if ($services) { ?>
	
	<?php foreach ($services as $service) { ?>
	
	<?php 
	$service_args = array(
	'posts_per_page' => -1,
	'post_type'		=> 'page',
	'orderby'		=> 'menu_order',
	'post_parent'	=> $service->ID,
	'order'			=> 'ASC'
	);
	
	$service_children = get_posts($service_args);
	
	$landing_pg_args = array(
	'post_type'		=> 'tlw_landing_page',
	'meta_key'	=> 'service_area',
	'meta_value'=> $service->ID
	);
	$landing_pgs = get_posts($landing_pg_args);
	
	//echo '<pre>';print_r($landing_pgs);echo '</pre>';
	
	if (!empty($landing_pgs)) {
		foreach ($landing_pgs as $lp) {
		array_push($service_children, $lp);
		} 	
	}
	 ?>
	
		<div class="list-block">
			<a href="<?php echo get_permalink($service->ID); ?>" class="header-link"><?php echo $service->post_title; ?></a>
			
		<?php if ($service_children) { ?>
			
			<ul class="list-unstyled">
			
			<?php foreach ($service_children as $service_child) { 
			$gc_args = array(
			'posts_per_page' => -1,
			'post_type'		=> 'page',
			'orderby'		=> 'menu_order',
			'post_parent'	=> $service_child->ID,
			'order'			=> 'ASC'
			);
			$service_gchildren = get_posts($gc_args);
			?>
			<li><a href="<?php echo get_permalink($service_child->ID); ?>"><?php echo $service_child->post_title; ?></a></li>
				<?php if ($service_gchildren) { ?>
					<?php foreach ($service_gchildren as $g_child) { ?>
					<li><a href="<?php echo get_permalink($g_child->ID); ?>"><?php echo get_the_title($g_child->ID); ?></a></li>
					<?php } ?>
				<?php } ?>

			<?php } ?>
				
			</ul>	
			
		<?php } ?>

		</div>
	
	<?php } ?>

	<?php } ?>
					
</div>