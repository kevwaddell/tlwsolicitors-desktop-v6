<?php 
if (!is_admin()) {
	
	function custom_dequeue() {
		
		if (!is_admin()) {
	    wp_dequeue_style('autoptimize-toolbar');
	    wp_deregister_style('autoptimize-toolbar');
	    wp_dequeue_script('autoptimize-toolbar');
	    wp_deregister_script('autoptimize-toolbar');
	    }
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
	add_action( 'wp_head', 'custom_dequeue', 9999 );

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