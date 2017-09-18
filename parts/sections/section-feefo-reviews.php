<?php 
$feedback_pg = get_page_by_title( "Why Choose TLW" );	
if ($post->ID != $feedback_pg->ID) { ?>

<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://api.feefo.com/api/10/reviews/service?merchant_identifier=tlw-solicitors&rating=5');
$result = curl_exec($ch);
curl_close($ch);
$feefo = json_decode($result);	
$rand_reviews = array_rand($feefo->reviews, 3);

//echo '<pre>';print_r($feefo->reviews);echo '</pre>';
$total_reviews = count($feefo->reviews);
?>

<div class="rule mag-top-60"></div>
<section id="feefo-reviews" class="pg-section">
	<div class="container">
		<h2 class="section-header">Client Feedback</h2>
		
		<div class="row feefo-reviews">
			
			<?php foreach ($rand_reviews as $review) { 
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
			//echo '<pre>';print_r(strlen($summary));echo '</pre>';
			?>
			<div class="col-xs-4">
				<?php //echo '<pre>';print_r($feefo->reviews[$review]);echo '</pre>'; ?>
				<div class="feefo-review">
					<div class="rating text-center">
						<?php for ($i = 1; $i <= $rating; $i++) { ?>
						    <i class="fa fa-star fa-2x"></i>
						<?php } ?>
					</div>
					<a href="<?php echo $url; ?>" target="_blank" rel="nofollow" class="summary text-center<?php echo (strlen($summary) > 92) ? '':' no-elipse'; ?>">
						<?php echo $summary; ?>
						</a>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div>
</section>
			
<?php } ?>