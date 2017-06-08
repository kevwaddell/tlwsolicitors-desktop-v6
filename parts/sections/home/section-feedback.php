<?php
global $section;
$feedback_active = $section['feedback_active'];
?>
<?php if ($feedback_active) { 
$testimonials = $section['testimonials'];
$testimonials_total = count($testimonials);
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container">
		<?php
		$k = rand(0, $testimonials_total-1);
		//echo '<pre>';print_r($testimonials[$k]['testimonial']);echo '</pre>';
		$quote_id = $testimonials[$k]['testimonial'];
		$quote_txt = get_field('quote', $quote_id);	
		$client_name = get_field('client_name', $quote_id);		
		$location = get_field('location', $quote_id);	
		$company = get_field('company', $quote_id);
		if (!empty($company)) {
		$location = $company.', '.$location;	
		}
		?>
		<div id="quote-id-<?php echo $k; ?>" class="feedback-quote">
			<blockquote class="no-border"><?php echo $quote_txt; ?></blockquote>
			<span class="quote-name"><?php echo $client_name; ?>, <?php echo $location; ?></span>
		</div>
	</div>
</section>
<?php } ?>