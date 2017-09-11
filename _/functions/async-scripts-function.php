<?php 
if (!is_admin()) {

	add_filter( 'gform_init_scripts_footer', '__return_true' );
	
	function add_async_attribute($tag, $handle) {
		
	
		//echo '<pre>';print_r($handle);echo '</pre>';
	   // add script handles to the array below
	   
	   //return $tag;
	   return str_replace(' src', ' defer src', $tag);
	  
	}
	
	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
}	
?>