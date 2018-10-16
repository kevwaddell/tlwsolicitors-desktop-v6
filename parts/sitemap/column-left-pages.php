<?php
$gbl_services_2018 = get_field( 'gbl_services_2018', 'options' );
//echo '<pre>';print_r($gbl_services_2018);echo '</pre>';
?>

<div class="col-xs-6">
<?php if (!empty($gbl_services_2018)) { ?>
	
	<?php foreach ($gbl_services_2018 as $s) { 
	$title_type = $s['title_type'];	
	$sub_pages = $s['sub_pages'];
	//echo '<pre>';print_r($s);echo '</pre>';
	?>
	<div class="list-block">
			
			<?php if ($title_type) { 
			$service_text = $s['service_text'];
			?>
			<h3><?php echo $service_text; ?></h3>
			<?php } else { 
			$service_pg = $s['service_pg'];
			?>
			<a href="<?php echo get_permalink($service_pg); ?>" class="header-link"><?php echo get_the_title( $service_pg ); ?></a>
			<?php } ?>
			
			<?php if ($sub_pages) { 
			$sub_services = $s['services'];
			?>
			
			<ul class="list-unstyled">
			
			<?php foreach ($sub_services as $sc) { 
			$sc_id = $sc['service'];
			?>
			<li><a href="<?php echo get_permalink($sc_id); ?>"><?php echo get_the_title($sc_id); ?></a></li>
			<?php } ?>
				
			</ul>	
			
		<?php } ?>
		
	</div>
	<?php } ?>

<?php } ?>
				
</div>