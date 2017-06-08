<?php 
if(!is_admin()) {
	add_filter('style_loader_tag', 'link_to_loadCSS_script',10,3);
	function link_to_loadCSS_script($html, $handle, $href ) {
		
	//echo '<pre>';print_r($html);echo '</pre>';
	
			if ($handle == 'merged-style') {
			$dom = new DOMDocument();
		    $dom->loadHTML($html);
		    $a = $dom->getElementById($handle.'-css');	
			return "<noscript id=\"deferred-styles\"><link rel=\"". $a->getAttribute('rel') ."\" type=\"text/css\" href=\"".$a->getAttribute('href')."\" media=\"none\" onload=\"if(media!='all')media='all'\"/></noscript>";
			} else {
				return $html;
			}
	
	   
	}
}	
?>