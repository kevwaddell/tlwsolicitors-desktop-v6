<?php 
$freephone_num = get_field('freephone_num', 'option');	
?>
<?php if (!empty($freephone_num)) { ?>
<div id="global-tel-num">
	<div class="container">
		<i class="fa fa-whatsapp"></i>
		<div class="number font-slab-serif text-center">
			Call us on <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><?php echo $freephone_num; ?></a>
		</div>
		<i class="fa fa-comments"></i>
	</div>
</div>
<?php } ?>