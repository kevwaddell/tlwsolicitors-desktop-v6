<?php 
if(!is_admin()) {
	
	add_action('wp_print_styles', 'show_all_styles', 5);
	function show_all_styles() {
		// use global to call variable outside function
		
		global $wp_styles;
		
		// arrange the queue based on its dependency
		$wp_styles->all_deps($wp_styles->queue);	
		
		// The result
		$handles = $wp_styles->to_do;
		
		//echo '<pre>';print_r($handles);echo '</pre>';
		
		$css_code = '';
	
		// New file location: E:xampp\htdocs\wordpress\wp-content\theme\wdc\merged-style.css
		$merged_file_location = get_stylesheet_directory() .'/_/css/merged-style.css';
		$merged_file = file_get_contents($merged_file_location);
		$print_styles_key = array_search('print-styles', $handles);
		unset($handles[$print_styles_key]);
		
		//cho '<pre>';print_r($handles);echo '</pre>';
		
		if (is_user_logged_in()) {

		$dashicons_key = array_search('dashicons', $handles);
		if (isset($dashicons_key)) {
		unset($handles[$dashicons_key]);	
		}
		
		$admin_bar_key = array_search('admin-bar', $handles);
		if (isset($admin_bar_key)) {
		unset($handles[$admin_bar_key]);	
		}

		$yoast_seo_adminbar_key = array_search('yoast-seo-adminbar', $handles);
		if (isset($yoast_seo_adminbar_key)) {
		unset($handles[$yoast_seo_adminbar_key]);
		}
		
		$autoptimize_toolbar_key = array_search('autoptimize-toolbar', $handles);
		if (isset($autoptimize_toolbar_key)) {	
		unset($handles[$autoptimize_toolbar_key]);
		}
					
		}
		//echo '<pre>';print_r($handles);echo '</pre>';
		// loop all styles
		foreach ($handles as $handle)
		{
		//echo '<pre>';print_r($handles);echo '</pre>';
			/*
				Clean up the url, for example: wp-content/themes/wdc/style.min.css?v=4.6
				become wp-content/themes/wdc/style.min.css
			*/
			$src = strtok($wp_styles->registered[$handle]->src, '?');
			
			// #1. Combine CSS File.
			// If the src is url		
			if (strpos($src, 'http') !== false  || strpos($src, 'https') !== false) {
				// Get thr site url, e.g. http://webdevzoom.com/wordpress
				$site_url = site_url();
			
				/*
					If the css file come from local server, change the full url into relative path
					For example: http://webdevzoom.com/wordpress/wp-content/plugins/wpnewsman/css/menuicon.css
					Become: /wp-content/plugins/wpnewsman/css/menuicon.css
					
					Otherwise, leave it as is, e.g: https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
				*/
				if (strpos($src, $site_url) !== false)
					$css_file_path = str_replace($site_url, '', $src);
				else
					$css_file_path = $src;
				
				/*
					In order to be able to use file_get_contents function, we need to remove preceding slash,
					For example: /wp-content/plugins/wpnewsman/css/menuicon.css
					Become: wp-content/plugins/wpnewsman/css/menuicon.css
				*/
				$css_file_path = ltrim($css_file_path, '/');
			} else {			
				$css_file_path = ltrim($src, '/');
			}
			
			//echo '<pre>';print_r($css_file_path);echo '</pre>';
			// Check wether file exists then merge
			if  (file_exists($css_file_path)) {
				$css_code .=  file_get_contents($css_file_path);
			}
		}
	//echo '<pre>';print_r(get_stylesheet_directory_uri() );echo '</pre>';
		
		// write the merged styles into current theme directory
		if ($merged_file !== $css_code) {
		file_put_contents ($merged_file_location , $css_code);
		}
		
		// #2. Load the URL of merged file
		wp_enqueue_style('merged-style',  get_stylesheet_directory_uri() . '/_/css/merged-style-min.css', array(), filemtime( get_stylesheet_directory().'/_/css/merged-style.css'), 'all');
		wp_enqueue_style('gf-merged-style',  get_template_directory_uri() . '/_/css/gf-merged-min.css', array(), filemtime( get_template_directory().'/_/css/gf-merged.css'), 'all');
		
		// #3. Deregister all handles
		foreach ($handles as $handle)
		{
			wp_dequeue_style($handle);
			wp_deregister_style($handle);
		}
	}
}	
?>