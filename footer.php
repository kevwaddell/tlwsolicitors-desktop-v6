		<?php 
		$awards_section_active = get_field( 'awards_section_active', 'options' );	
		?>
		
		<?php if ($awards_section_active) { ?>
			<?php get_template_part( 'parts/sections/section', 'credits' ); ?>		
		<?php } ?>
		
		<!-- FOOTER START -->
			<div class="rule"></div>
			<?php 
			$xmas_opening_hrs_active = get_field('xmas_hrs_active', 'options');	
			$turn_off_date = get_field('turn_off_date', 'options');	
			$today = date('Ymd');
			?>
			<section id="footer-info"<?php echo ( $xmas_opening_hrs_active && ($today < $turn_off_date) ) ? ' class="xmas-pop-up-on"':''; ?>>
			
				<?php get_template_part( 'parts/footers/footer', 'links' ); ?>	
								
				<?php get_template_part( 'parts/footers/copyright', 'notice' ); ?>		
				
			</section>
			
	</div><!-- MAIN WRAPPER END -->
	
	<?php get_template_part( 'parts/sections/section', 'blog-slidein' ); ?>

	<?php get_template_part( 'parts/global/popups/all', 'popups' ); ?>	
	
	<?php //get_template_part( 'parts/global/site', 'loader' ); ?>	
	
	<!-- FEEFO REVIEWS -->
	<?php get_template_part( 'parts/global/popups/feefo', 'widget' ); ?>	
	
	<?php wp_footer(); ?>
	
	</body>
</html>