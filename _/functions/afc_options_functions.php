<?php 
/*
*  Change the Options Page menu to 'Site Options'
*/
 
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Global') );
}


if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_sub_page(
   		array(
        'title' => __('Site options'),
		)
    );
    
}

/*
*  AFC Options Page
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_add_options_sub_page') ) {
	
	acf_add_options_sub_page('Site footer');
	acf_add_options_sub_page('Office location');
	acf_add_options_sub_page('Homepage');
	acf_add_options_sub_page('Testimonials');
	acf_add_options_sub_page('Toolkits');
	acf_add_options_sub_page('Pop ups');
	acf_add_options_sub_page('Sitemap');
	
}

/*
*  AFC Google API
*/

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCWfwM9bo9zsSfrpXwMZ0bDZbhvgiP1tKo';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

 ?>