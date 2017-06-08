<?php 
if(!is_admin()) {
	
	add_action('wp_print_styles', 'show_all_styles');
	function show_all_styles() {
		// use global to call variable outside function
		
		global $wp_styles;
		
		// arrange the queue based on its dependency
		$wp_styles->all_deps($wp_styles->queue);	
		
		// The result
		$handles = $wp_styles->to_do;
		
		$css_code = '';
	
		// New file location: E:xampp\htdocs\wordpress\wp-content\theme\wdc\merged-style.css
		$merged_file_location = get_stylesheet_directory() .'/_/css/merged-style.css';
		$merged_file = file_get_contents($merged_file_location);
		$print_styles_key = array_search('print-styles', $handles);
		unset($handles[$print_styles_key]);
		// loop all styles
		foreach ($handles as $handle)
		{
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
			
			// Check wether file exists then merge
			if  (file_exists($css_file_path)) {
				$css_code .=  file_get_contents($css_file_path);
			}
		}
	
		// write the merged styles into current theme directory
		if ($merged_file != $css_code) {
		file_put_contents ($merged_file_location , $css_code);
		}
		
		// #2. Load the URL of merged file
		wp_enqueue_style('merged-style',  get_stylesheet_directory_uri() . '/_/css/merged-style.css', array(), filemtime( get_stylesheet_directory().'/_/css/styles.css'), 'all');
		
		// #3. Deregister all handles
		foreach ($handles as $handle)
		{
			wp_deregister_style($handle);
		}
	}
}	
?>