<!DOCTYPE html>
<html lang="en-GB" class="no-js">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">
	
	<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
	<!-- Trinity Mirror script -->
	<script>
!function(t,e){e||(e=e||{},window.permutive=e,e.q=[],_pv="1.0",e.init=function(n,r,o){e.config={projectId:n,apiKey:r,environment:o||"production"};for(var i=["track","identify","events","query","addon","trigger","ready","defineEntities"],a=0;a<i.length;a++){var c=i[a];e[c]=function(t){return function(){var n=Array.prototype.slice.call(arguments,0);e.q.push({functionName:t,arguments:n})}}(c)}var p=t.createElement("script");p.type="text/javascript",p.async=!0;var s="https:"==t.location.protocol?"https://d3alqb8vzo7fun.cloudfront.net":"http://cdn.permutive.com";p.src=s+"/"+n+"-"+_pv+".js";var u=t.getElementsByTagName("script")[0];u.parentNode.insertBefore(p,u)})}(document,window.permutive),permutive.init("8a2c2f13-f564-4fff-8d22-177534028b95","68303c0c-2e2e-4b14-8d14-245e59740f1a");
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PLBR4F');</script>
	<!-- End Google Tag Manager -->
	<!-- Trinity Mirror Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KHL78WL');</script>
	<!-- End Trinity Mirror Google Tag Manager -->
	<?php } ?>

	<style id="critical-css">
		<?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?>
	</style>
	
	<meta charset="UTF-8">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<meta name="viewport" content ="width=device-width,user-scalable=yes" />
	<meta name="format-detection" content="telephone=yes">
	
	<meta name="geo.region" content="GB">
	<meta name="geo.placename" content="North Shields">
	<meta name="geo.position" content="55.009452;-1.490004">
	<meta name="ICBM" content="55.009452, -1.490004">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=zXdkgBvmkj">
	<link rel="icon" type="image/png" href="/favicon-32x32.png?v=zXdkgBvmkj" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png?v=zXdkgBvmkj" sizes="16x16">
	<link rel="manifest" href="/manifest.json?v=zXdkgBvmkj">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=zXdkgBvmkj" color="#cc015a">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
	<script>
		var loadDeferredStyles = function() {
		var addStylesNode = document.getElementById("deferred-styles");
		var gfStylesNode = document.getElementById("gf-deferred-styles");
		var replacement = document.createElement("div");
		replacement.innerHTML = gfStylesNode.textContent + addStylesNode.textContent;
		document.body.appendChild(replacement);
		gfStylesNode.parentElement.removeChild(gfStylesNode);
		addStylesNode.parentElement.removeChild(addStylesNode);
		};
	 
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	  if (raf) { 
		  raf(function() { 
		   window.setTimeout(loadDeferredStyles, 0); 
			});
	 	} else { 
		 	window.addEventListener('load', loadDeferredStyles); 
		 }
	</script>
    
	<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
	<!-- Adwords Call tracking -->
	<script type="text/javascript">
	(function(a,e,c,f,g,h,b,d){var k={ak:"966769174",cl:"lASLCOjY32sQlvT-zAM",autoreplace:"08001695925"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
	</script>
	<!-- Adwords Call tracking -->
	<?php } ?>
	
	<?php 
	if ( isset($_GET['src']) && $_GET['src'] == "mis-sold-solar-co-uk" ) {
	setcookie("src",$_GET['src'] , strtotime( '+6 months' ), "/financial-mis-selling/solar-panel-mis-selling" );
	}
	?>
</head>