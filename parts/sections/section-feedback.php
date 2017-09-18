<?php
global $section;
$feedback_active = $section['feedback_active'];
?>

<?php if ($feedback_active) { 
$section_title = "Client Feedback";	

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://api.feefo.com/api/10/reviews/service?merchant_identifier=tlw-solicitors&rating=5');
$result = curl_exec($ch);
curl_close($ch);
$feefo = json_decode($result);	
$rand_reviews = array_rand($feefo->reviews, 5);

$total_reviews = count($feefo->reviews);
 ?>
<div class="rule"></div>
<!-- TEAM PROFILES SECTION -->
<section id="feedback-section" class="pg-section feedback-list">
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>	
		<div class="lg-intro">
			<?php the_content(); ?>
		</div>
		<div class="rule"></div>
		
		<?php foreach ($rand_reviews as $k => $review) { 
		$rating = $feefo->reviews[$review]->service->rating->rating;
		$summary = $feefo->reviews[$review]->service->review;
		$url = $feefo->reviews[$review]->url;
		if(substr($summary, -1) === ','){$summary = rtrim($summary, ",");}
		if(substr($summary, -1) != '.'){
			if (substr($summary, -1) === '!') {
			break;
			} else {
			$summary.= '.';	
			}
		}
		?>
		<div class="feedback-quote">
			<div class="rating text-center">
				<?php for ($i = 1; $i <= $rating; $i++) { ?>
				    <i class="fa fa-star fa-2x"></i>
				<?php } ?>
			</div>
			<a href="<?php echo $url; ?>" target="_blank" rel="nofollow" class="summary text-center">
				<?php echo $summary; ?>
			</a>
		</div>
		<?php if ($k+1 < 5) { ?>
		<div class="rule"></div>
		<?php } ?>
		
		<?php } ?>		
	</div>
</section>
<!-- TEAM PROFILES SECTION -->
<?php } ?>