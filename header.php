<?php
get_template_part( 'parts/headers/header', 'global' );
$body_classes = array('atfc-desktop-css','nav-closed');
?>	

<body <?php body_class($body_classes); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php } ?>
<a class="sr-only fouc" href="#main-content">Skip to main content</a>	
<?php get_template_part( 'parts/navigation/nav', 'main' ); ?>	

<div class="tlw-wrapper" style="filter: blur(10px) grayscale(100%);">

	<!-- HEADER LOGO AND NAVIGATION -->	
	
	<?php get_template_part( 'parts/global/main', 'masthead' ); ?>	