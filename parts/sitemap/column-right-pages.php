<?php 
//echo '<pre>';print_r($practices);echo '</pre>';
$company_page = get_post(12);
$company_page_icon = get_field('page_icon', $company_page->ID);

$company_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $company_page->ID,
'order'			=> 'ASC',
'posts_per_page' => -1,
);

$company_pages = get_posts($company_args);

$rescources_args = array(
'post_type'		=> 'page',
'orderby'		=> 'title',
'include'		=> array(10, 95),
'order'			=> 'ASC'
);

$rescources_pages = get_posts($rescources_args);

$legal_page = get_page_by_title('Legal Notices');
$legal_page_icon = get_field('page_icon', $legal_page->ID);

$legal_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $legal_page->ID,
'order'			=> 'ASC'
);

$legal_pages = get_posts($legal_args);

$videos_pg_id = get_page_id('videos');
$downloads_pg_id = get_page_id('downloads');
$toolkits_pg = get_page_by_path( 'tlw-toolkits');

//echo '<pre>';print_r($toolkits_pg);echo '</pre>';

 ?>
<div class="col-xs-4">
		
	<div class="list-block">
		<h3>TLW Media & Rescources</h3>
		<ul class="list-unstyled">
			
			<li><a href="<?php echo get_permalink($toolkits_pg->ID); ?>"><?php echo get_the_title($toolkits_pg->ID); ?></a></li>
			<li><a href="<?php echo get_permalink($videos_pg_id); ?>"><?php echo get_the_title($videos_pg_id); ?></a></li>
			<li><a href="<?php echo get_permalink($downloads_pg_id); ?>"><?php echo get_the_title($downloads_pg_id); ?></a></li>
			
		</ul>
		
	</div>
	
	<?php if ($company_pages) { 
	$vacancies_pg = get_page_by_title( "Vacancies" );	
	?>
		<div class="list-block">
			<a href="<?php echo get_permalink($company_page->ID); ?>" class="header-link"><?php echo $company_page->post_title; ?></a>
			<ul class="list-unstyled">
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
				<?php } ?>
				<?php if ($vacancies_pg) { ?>
				<li><a href="<?php echo get_permalink($vacancies_pg->ID); ?>"><?php echo $vacancies_pg->post_title; ?></a></li>			
				<?php } ?>
			</ul>
			
		</div>
	<?php } ?>
						
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
		<h3>General</h3>
			<ul class="list-unstyled">
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	
	<?php if ($legal_pages) { ?>
		<div class="list-block">
		<a href="<?php echo get_permalink($legal_page->ID); ?>" class="header-link"><?php echo $legal_page->post_title; ?></a>
			<ul class="list-unstyled">
			
				<?php foreach ($legal_pages as $legal_page) { ?>
									 
				<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
</div>