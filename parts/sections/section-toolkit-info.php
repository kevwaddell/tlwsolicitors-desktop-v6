<?php 
$slides_choice = get_field('tk_slides').'_tk_slides';
$slides = get_field($slides_choice, 'option');
?>

<section class="toolkit-info">

<?php foreach ($slides as $k => $slide) { ?>
	<div class="rule"></div>			
	<article class="tk-info">
		<div class="container">
			<div class="row">
				<div class="col-xs-9 tk-info-txt">
					<h2 class="font-slab-serif"><?php echo $slide['slide_title']; ?></h2>
					<?php echo $slide['slide_text']; ?>
				</div>
				<div class="col-xs-3">
					<figure class="tk-img" style="background-image: url(<?php echo $slide['slide_img']; ?>)"></figure>
				</div>
			</div>
		</div>
	</article>
<?php } ?>	
	
</section>

