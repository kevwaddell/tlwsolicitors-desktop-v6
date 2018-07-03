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
	
	<?php wp_footer(); ?>
	</body>
</html>