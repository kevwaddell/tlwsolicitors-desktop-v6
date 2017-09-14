<?php  
global $hide_title;
global $post;
$about_pg = get_page_by_title('About TLW Solicitors');
$about_pg_icon = get_field('page_icon', $about_pg->ID);
$team_pg = get_page_by_title('Our Team');
$team_pg_icon = get_field('page_icon', $team_pg->ID);
$community_pg = get_page_by_title('TLW in the Community');
$community_pg_icon = get_field('page_icon', $community_pg->ID);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://api.feefo.com/api/10/reviews/summary/all?merchant_identifier=tlw-solicitors');
$result = curl_exec($ch);
curl_close($ch);
$feefo = json_decode($result);
$review_count = $feefo->meta->count;
$rating = $feefo->rating->rating;
$rating_max = $feefo->rating->max;
$percentage = ($rating * 100) / $rating_max;
//echo '<pre>';print_r($feefo);echo '</pre>';
?>
<article <?php post_class("content-section"); ?>>	
	
	<div class="container">
		<div class="row">
			
			<div class="col-xs-8">
				<div class="entry">
					<div class="main-txt home">
					<?php the_content(); ?>
					</div>								
				</div>
			</div>
			
			<div class="col-xs-3 col-xs-offset-1">
				<aside class="hp-sidebar">	
					<div class="feefo-panel">
						<i class="fa fa-star"></i>
						<h3>Feefo</h3>
						<div class="title caps text-center">Service Rating <strong><?php echo $rating; ?></strong></div>
						<div class="review-count text-center"><?php echo $review_count; ?> Service reviews</div>
						<div class="star-rating">
							<div class="col-bar" style="width: <?php echo $percentage; ?>%;"></div>
							<div class="stars"></div>
						</div>
					</div>	
					<a href="<?php echo get_permalink($about_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $about_pg_icon; ?> fa-lg"></i>About us</a>	
					<a href="<?php echo get_permalink($team_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $team_pg_icon; ?> fa-lg"></i><?php echo get_the_title($team_pg->ID); ?></a>	
					<a href="<?php echo get_permalink($community_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $community_pg_icon; ?> fa-lg"></i>In the community</a>
				</aside>		
			</div>
			
		</div>
	</div>
</article>