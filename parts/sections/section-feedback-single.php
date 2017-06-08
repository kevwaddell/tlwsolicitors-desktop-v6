<?php
global $section;
$feedback_id = $section['client_feedback'];

if (empty($feedback_id)) {
	$feedback_args = array(
	'posts_per_page'   => 1,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand'
	); 
	$feedback_quote = get_posts($feedback_args); 	
	
	$feedback_id = $feedback_quote[0]->ID;
} 

$quote = get_field('quote', $feedback_id);	
$name = get_field('client_name', $feedback_id);		
$location = get_field('location', $feedback_id);	
$gender = get_field('gender', $feedback_id);
$company = get_field('company', $feedback_id);
if (!empty($company)) {
$location = $company.', '.$location;	
}
//echo '<pre class="debug">';print_r($gender);echo '</pre>';	 
?>
<section id="feedback-section" class="pg-section">	
	<div class="container">
		<div class="feedback-quote">
			<blockquote class="no-border"><?php echo $quote; ?></blockquote>
			<span class="quote-name"><?php echo $name; ?>, <?php echo $location; ?></span>
		</div>
	</div>
</section>