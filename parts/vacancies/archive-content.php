<?php  
global $content;
?>
<article <?php post_class("content-section page"); ?>>
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container">
			
		<div class="row">

			<div class="col-xs-11">
				
				<div class="entry">
					
					<div class="main-txt">
						<?php echo $content; ?>
					</div>
																
				</div>
				
			</div>
			
			<div class="col-xs-1">
			<?php get_sidebar(); ?>
			</div>
			
		</div>
									
	</div>

</article>