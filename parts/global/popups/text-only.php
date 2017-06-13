<?php if (is_single() || is_page() && !is_front_page() ) { ?>
<div id="txt-only-content" class="closed">
	<div class="container">
		<div class="row">
			<div class="col-xs-1">
				<button id="close-txt-only-btn" class="btn"><i class="fa fa-times"></i><span class="sr-only">Close</span></button>
			</div>
			<div class="col-xs-10">
				<div id="txt-only-wrapper">
		
				</div>
			</div>
			
			<?php get_template_part( 'parts/global/popups/access', 'btns' ); ?>
			
		</div>
	</div>
</div>
<?php } ?>