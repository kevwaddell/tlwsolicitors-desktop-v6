<?php get_template_part( 'parts/headers/header', 'landing-page' );
	
$body_classes = array('atfc-desktop-css');	

if ( !isset($_GET['gsdm']) ) {
array_push($body_classes, 'loading');
}		
?>	

<body id="landing-page" <?php body_class($body_classes); ?>>
<?php if ($_SERVER['SERVER_NAME']=='tlwsolicitors.staging.wpengine.com') { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDNR9J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php } ?>

<?php 
$color = get_field('page_colour', $post->ID);
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$bg_img_thumb = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
$bg_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$bg_img_thumb_url = $bg_img_thumb[0];
$bg_img_url = $bg_img[0];
$tag_line = get_field('tag_line', 'options');
?>

<?php //include (STYLESHEETPATH . '/_/inc/global/site-loader.inc'); ?>
	
<div class="tlw-wrapper">
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<header class="header abs-header" role="banner">

		<div class="header-inner">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
					</div>
					<div class="col-xs-6">
					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					</div>
				</div>
			</div>
		</div>
				
	</header>