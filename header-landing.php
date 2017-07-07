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
	
<div class="tlw-wrapper">
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<?php get_template_part( 'parts/landingPage/main', 'masthead' ); ?>	
	
	<main id="main-content" class="page-wrapper">