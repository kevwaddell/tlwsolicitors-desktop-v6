<!DOCTYPE html>
<html lang="en-GB" class="no-js">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
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

	<style><?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?></style>
	
	<?php wp_head(); ?>
	
	<script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
        document.body.classList.remove("atfc-desktop-css");
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) { raf(function() { window.setTimeout(loadDeferredStyles, 0); });
     } else { window.addEventListener('load', loadDeferredStyles); }
	</script>

</head>

<body id="login" <?php body_class('atfc-desktop-css'); ?>>
	
	<section id="user-wrap">