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
	
	<?php if (!is_front_page()) { ?>
	<div id="feefo-service-review-floating-widgetId"></div>			
	<?php } ?>
	
	
	<?php wp_footer(); ?>

	</body>
</html>