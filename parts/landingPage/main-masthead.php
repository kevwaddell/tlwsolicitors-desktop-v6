<?php 
$email = get_field( 'main_email', 'options' );
$contact_pg = get_page_id( 'contact-us' );
?>

<header class="header" role="banner">

	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				</div>
				<div class="col-xs-6">
					<div class="header-action-btns pull-right">
						<a href="<?php echo get_option('home'); ?>/" class="btn btn-default"><span class="sr-only"><?php bloginfo('name'); ?></span><i class="fa fa-home fa-lg"></i></a>
						<a href="<?php echo get_permalink($contact_pg); ?>" class="btn btn-default"><span class="sr-only"><?php get_the_title($contact_pg); ?></span><i class="fa fa-paper-plane fa-lg"></i></a>
						<a href="<?php echo get_permalink($contact_pg); ?>#find-us" class="btn btn-default"><span class="sr-only">Find us</span><i class="fa fa-map-marker fa-lg"></i></a>
						<a href="mailto:<?php echo $email;?>" class="btn btn-default"><span class="sr-only">Email us</span><i class="fa fa-envelope fa-lg"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
			
</header>
<?php get_template_part( 'parts/global/color', 'strip' ); ?>