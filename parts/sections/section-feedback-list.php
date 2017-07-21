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
$section_title = "Client Feedback";	
			
if ($feedback_quotes) { ?>

<!-- TEAM PROFILES SECTION -->
<section id="feedback-section" class="pg-section feedback-list">
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>
		
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
		

		<div id="quote-id-<?php echo $k; ?>" class="feedback-quote">
			<blockquote class="no-border"><?php echo $quote; ?></blockquote>
			<span class="quote-name"><?php echo $name; ?>, <?php echo $location; ?></span>
		</div>
		<?php if ($k+1 < count($feedback_quotes)) { ?>
		<div class="rule"></div>
		<?php } ?>
		
		<?php } ?>		
	</div>
</section>
<!-- TEAM PROFILES SECTION -->

<?php } ?>
