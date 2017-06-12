<?php 
$feedback_args = array(
	'posts_per_page'   => 5,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand'
	); 
$testimonials = get_posts($feedback_args); 
$testimonials_total = count($testimonials);	
?>
<section id="feedback-section" class="pg-section">
			
	<div class="container">
		<?php
		$k = rand(0, $testimonials_total-1);
		$quote_id = $testimonials[$k]->ID;
		$quote_txt = get_field('quote', $quote_id);	
		$client_name = get_field('client_name', $quote_id);		
		$location = get_field('location', $quote_id);	
		$gender = get_field('gender', $quote_id);
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