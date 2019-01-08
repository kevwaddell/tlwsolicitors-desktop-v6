<div class="copyright">
	<div class="container">
		<div class="row">
				
				<div id="footer-logo" class="hidden-xs text-hide"><?php bloginfo('name'); ?></div>
				<div class="compliance-notice text-center">
				<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?>. All rights reserved.</p>
				<?php $compliance_notice = get_field('compliance_notice', 'option');?>
				<?php if (isset($compliance_notice)) { ?>
				<?php echo $compliance_notice; ?>
				<?php }  ?>
				</div>
		</div>
		<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'text-center social-links list-inline', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>
	</div>
</div>