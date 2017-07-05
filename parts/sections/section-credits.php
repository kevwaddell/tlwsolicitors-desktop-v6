<?php 
$credits = get_field( 'awards_and_credits', 'options');
$section_title = "Awards & Accreditations";

//echo '<pre>';print_r($credits);echo '</pre>';
?>

<div class="rule mag-top-60"></div>
<section id="credits-section" class="pg-section">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		
		<div class="credit-items">
			<?php foreach ($credits as $credit) { 
			$logo_src = wp_get_attachment_image_src($credit['logo'], 'thumbnail' );	
			?>
				<div class="credit">
					<a href="<?php echo $credit['website']; ?>" target="_blank" title="<?php echo $credit['company_name']; ?>">
						<span class="logo" style="background-image: url(<?php echo $logo_src[0]; ?>)"></span>
						<span class="description"><?php echo  $credit['description']; ?></span>	
					</a>
				</div>
			<?php } ?>
		</div>
	
	</div>
</section>