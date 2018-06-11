<?php
$awards_active = get_field('awards_active', 'options');	
if ($awards_active) {
$award_title = get_field('award_title', 'options');
$award_year = get_field('award_year', 'options');
$award_category = get_field('award_category', 'options');
?>
<div id="awards-banner" class="open">
	<div class="container">
	<div id="awards-banner-inner">
		<div class="inner-left">
			<div class="nla-logo"><span class="sr-only">Northern Law Awards</span></div><div class="year"><?php echo $award_year; ?></div>
		</div>
		<div class="inner-right">
			<div class="description"><?php echo $award_category; ?></div>
		</div>
	</div>
	</div>
</div>
<?php } ?>