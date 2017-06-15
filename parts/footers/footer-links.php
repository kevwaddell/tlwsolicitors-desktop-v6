<footer class="container">
					
	<div class="row">
	
		<div class="col-xs-3">
			<h3 class="caps txt-col-red font-slab-serif">Main service areas</h3>
			<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'footer-nav list-unstyled', 'theme_location' => 'footer_menu_one', 'fallback_cb' => false ) ); ?>
		</div>
		
		<div class="col-xs-3">
			<h3 class="caps txt-col-red font-slab-serif">Other service areas</h3>
			<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'footer-nav list-unstyled', 'theme_location' => 'footer_menu_two', 'fallback_cb' => false ) ); ?>
		</div>
		
		<div class="col-xs-3">
			<h3 class="caps txt-col-red font-slab-serif">Company pages</h3>
			<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'footer-nav list-unstyled', 'theme_location' => 'footer_menu_three', 'fallback_cb' => false ) ); ?>
		</div>
		
		<div class="col-xs-3">
			<h3 class="caps txt-col-red font-slab-serif">Company news</h3>
			<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'footer-nav list-unstyled', 'theme_location' => 'footer_menu_four', 'fallback_cb' => false ) ); ?>
		</div>
	
	</div>
	
	<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'text-center legal-nav list-inline', 'theme_location' => 'legal_links_menu', 'fallback_cb' => false ) ); ?>

</footer>
