<?php 
$feedback_args = array(
	'posts_per_page'   => 5,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand',
); 

if (!empty($exclude_quotes)) {
$feedback_args['exclude'] = $exclude_quotes;
}
$feedback_quotes = get_posts($feedback_args); 
			
if ($feedback_quotes) { ?>

<!-- TEAM PROFILES SECTION -->
<section id="feedback-section" class="pg-section feedback-list">
	
		<?php foreach ($feedback_quotes as $k => $fb) { 
		$name = get_field('client_name', $fb->ID);	
		$location = get_field('location', $fb->ID);	
		$quote = get_field('quote', $fb->ID);
		$gender = get_field('gender', $fb->ID);
		$company = get_field('company', $fb->ID);
		if (!empty($company)) {
		$location = $company.', '.$location;	
		}
		?>
		
		<div class="item">
		
			<div class="container feedback-quote">
				<div id="quote-id-<?php echo $k; ?>" class="feedback-quote">
					<blockquote class="no-border"><?php echo $quote; ?></blockquote>
					<span class="quote-name"><?php echo $name; ?>, <?php echo $location; ?></span>
				</div>
			</div>
		
		</div>

		<?php } ?>		

</section>
<!-- TEAM PROFILES SECTION -->

<?php } ?>
