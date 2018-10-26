		<?php 
		$awards_section_active = get_field( 'awards_section_active', 'options' );	
		?>
		
		<?php if ($awards_section_active) { ?>
			<?php get_template_part( 'parts/sections/section', 'credits' ); ?>		
		<?php } ?>
		
		<!-- FOOTER START -->
			<div class="rule"></div>
			<section id="footer-info">
			
				<?php get_template_part( 'parts/footers/footer', 'links' ); ?>	
								
				<?php get_template_part( 'parts/footers/copyright', 'notice' ); ?>		
				
			</section>
			
	</div><!-- MAIN WRAPPER END -->

	<?php get_template_part( 'parts/global/popups/all', 'popups' ); ?>	
	
	<?php //get_template_part( 'parts/global/site', 'loader' ); ?>	
	
	<!-- FEEFO REVIEWS -->
	<?php get_template_part( 'parts/global/popups/feefo', 'widget' ); ?>	
	
	<script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
	<script>
	var myLandbotPopup = new LandbotPopup({
    index: 'https://landbot.io/u/H-94039-8JG3T5FCHHMSK1I7/index.html',
	});
	</script>


	
	<?php wp_footer(); ?>
	
	</body>
</html>