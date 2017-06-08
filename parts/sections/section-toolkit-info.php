<?php 
$slides_choice = get_field('tk_slides').'_tk_slides';
$slides = get_field($slides_choice, 'option');
?>

<section class="toolkit-slider">

<?php foreach ($slides as $k => $slide) { ?>
	<div class="rule"></div>			
	<article class="tk-slide">
		<div class="container">
		<h2 class="slide-banner-header font-slab-serif"><?php echo $slide['slide_title']; ?></h2>
			<div class="row">
				<div class="col-xs-8">
					<?php echo $slide['slide_text']; ?>
				</div>
				<div class="col-xs-4">
					<figure class="tk-slide-img" style="background-image: url(<?php echo $slide['slide_img']; ?>)"></figure>
				</div>
			</div>
		</div>
	</article>
<?php } ?>	
	
</section>

