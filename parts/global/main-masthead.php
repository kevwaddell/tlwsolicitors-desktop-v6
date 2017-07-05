<?php 
$freephone_num = get_field('freephone_num', 'option');	
?>
<header class="header" role="banner">
	
		<div class="container">
			
			<div class="row">
			
				<div class="col-xs-4">
					<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				</div>
				
				<div class="col-xs-6">
					<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'top_bar_menu', 'menu_class'  => 'pull-left info-links list-inline','fallback_cb' => false ) ); ?>
					<div class="tel-num bold txt-col-red pull-right inline"><span class="caps txt-col-gray font-lite">Freephone: </span> <?php echo $freephone_num; ?></div>
				</div>
				
				<div class="col-xs-2">
					<div class="header-action-btns pull-right">
						<button id="search-btn" class="btn btn-default"><span class="sr-only">Search</span><i class="fa fa-search fa-lg"></i></button>
						<button id="nav-btn" class="btn btn-default in-active"><span class="sr-only">Menu</span><i class="fa fa-bars fa-lg"></i></button>
					</div>
				</div>
			
			</div>
		
		</div>
			
</header>

<?php get_template_part( 'parts/global/color', 'strip' ); ?>