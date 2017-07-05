<?php 
$email = get_field( 'main_email', 'options' );
$contact_pg = get_page_id( 'contact-us' );
$freephone_num = get_field('freephone_num', 'option');	
?>

<header class="header" role="banner">

	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				</div>
				<div class="col-xs-5">
					<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'top_bar_menu', 'menu_class'  => 'info-links list-inline','fallback_cb' => false ) ); ?>
				</div>
				<div class="col-xs-3">
					<div class="tel-num bold txt-col-red inline pull-right"><span class="caps txt-col-gray font-lite">Freephone: </span> <?php echo $freephone_num; ?></div>
				</div>
			</div>
		</div>
	</div>
			
</header>
<?php get_template_part( 'parts/global/color', 'strip' ); ?>