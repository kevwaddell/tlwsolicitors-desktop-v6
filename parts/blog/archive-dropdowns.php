<?php if ( !is_single() ) { ?>
<div class="rule"></div>			
<?php } ?>
<div class="archive-dropdowns">
	<div class="container">
	
		<div class="tb-links">
			<div class="row">
				
				<div class="col-xs-6">
					<?php get_template_part( 'parts/blog/date', 'dropdown' ); ?>	
				</div>
				
				<div class="col-xs-6">
					<?php get_template_part( 'parts/blog/category', 'dropdown' ); ?>
				</div>
							
			</div>
		</div>

	</div>
</div>