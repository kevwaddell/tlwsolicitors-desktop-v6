<?php 

/*
update_option('siteurl','');
update_option('home','');
*/

add_action( 'after_setup_theme', 'editor_styles' );

function editor_styles() {
add_editor_style(get_template_directory_uri().'/_/css/custom-editor-style.css?v='.filemtime( get_template_directory().'/_/css/custom-editor-style.css' ) );	
}

if (!is_admin()) {

	function tlw_scripts() {
	
		global $post;
		// Load stylesheets.
		wp_enqueue_style( 'print-styles', get_template_directory_uri().'/_/css/print-styles.css', null, filemtime( get_template_directory().'/_/css/print-styles.css' ), 'print' );
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', null, filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'screen' );
		
		// Load JS
		$functions_dep = array(
		'jquery',
		'bootstrap-min',
		'bootstrap-select', 
		'jquery-cookie', 
		'slim-scroll',
		'widow-fix'
		);
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', true);
	    wp_enqueue_script( 'modernizr-min', get_template_directory_uri() . '/_/js/modernizr-min.js', array(), '2.8.3', true );
		//wp_enqueue_script( 'feefo', 'https://api.feefo.com/api/javascript/tlw-solicitors', array(), '1.0.0', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/_/js/bootstrap-min.js', array('jquery'), '2.8.3', true );
		wp_enqueue_script( 'jquery-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), '1.4.1', true );
		wp_enqueue_script( 'slim-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'widow-fix', get_template_directory_uri() . '/_/js/widowFix.min.js', array('jquery'), '1.3.2', true );
		wp_enqueue_script( 'bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js', array('jquery'), '1.11.2', true );
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions-min.js', $functions_dep, filemtime( get_stylesheet_directory().'/_/js/functions.js' ), true );
		
	}
	add_action( 'wp_enqueue_scripts', 'tlw_scripts' );
}

// MERGE ALL CSS INTO ONE FILE FUNCTIOM
include (TEMPLATEPATH . '/_/functions/merge-styles-function.php');

// Custom deque to force remove unwanted css
include (TEMPLATEPATH . '/_/functions/async-scripts-function.php');

//LoadCSS script function
include (TEMPLATEPATH . '/_/functions/loadCSS-function.php');

if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') {
	function ewp_remove_script_version( $src ){
		return remove_query_arg( 'ver', $src );
	}
	add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );
}

add_theme_support('html5', array('search-form'));

if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'hidden_menu' => 'Hidden navigation',
			  'top_bar_menu' => 'Top Bar navigation',
			  'legal_links_menu' => 'Legal menu',
			  'social_links_menu' => 'Footer social links',
			  'footer_menu_one' => 'Footer menu 1',
			  'footer_menu_two' => 'Footer menu 2',
			  'footer_menu_three' => 'Footer menu 3',
			  'footer_menu_four' => 'Footer menu 4'
			)
		);
}

if ( function_exists( 'register_sidebar' ) ) {
	
	$login_sb_args = array(
	'name'          => "User actions",
	'id'            => "user-actions",
	'description'   => 'Area for logged in user widget',
	'class'         => 'user-links',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '' 
	);
		
	$newsletter_sb_args = array(
	'name'          => "Newsletter Sign-up Form",
	'id'            => "newsletter-signup-form",
	'description'   => 'Newsletter signup widget',
	'class'         => 'contact-form',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' 
	);
	
	
	register_sidebar( $login_sb_args );
	register_sidebar( $newsletter_sb_args );
}


add_theme_support( 'post-thumbnails', array( 'page', 'post', 'tlw_landing_page' ) );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-background' );

// change size of admin featured image size in edit screen 
function change_featured_image_size_in_admin_28512( $downsize, $id, $size ) {
if ( ! is_admin() || ! get_current_screen() || 'edit' !==   get_current_screen()->parent_base ) {
return $downsize;
}

remove_filter( 'image_downsize', __FUNCTION__, 10, 3 );

// settings can be thumbnail, medium, large, full 
$image = image_downsize( $id, 'medium' ); 
add_filter( 'image_downsize', __FUNCTION__, 10, 3 );

return $image;
}
add_filter( 'image_downsize', 'change_featured_image_size_in_admin_28512', 10, 3 );

/* POST THUMBNAIL FUNCTIONS */

function add_banner_feat_img( $post ) {	
		
	$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
	$wide_banner_img = wp_get_attachment_image_src($post_thumbnail_id, 'feat-img-ex-wide' );
		
	echo $wide_banner_img[0];
	
	//echo '<pre>';print_r( $wide_banner_img[0] );echo '</pre>';
	
}

/* ---------------------------------- */

// Get the id of a page by its name
function get_page_id($page_name){
	global $wpdb;
	$page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name;
}

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/* REGISTER FEEDBACK CPT */
include (TEMPLATEPATH . '/_/functions/tlw_feedback_cpt.php');

/* REGISTER TEAMS CPT */
include (TEMPLATEPATH . '/_/functions/tlw_team_cpt.php');

/* REGISTER LANDING PAGE CPT */
include (TEMPLATEPATH . '/_/functions/tlw_landing_pages_cpt.php');

/* REGISTER HOW IT WORKS CPT */
include (TEMPLATEPATH . '/_/functions/tlw_how_it_works_cpt.php');

/* REGISTER FAQ's CPT */
include (TEMPLATEPATH . '/_/functions/tlw_faqs_cpt.php');

/* REGISTER Vacancies CPT */
include (TEMPLATEPATH . '/_/functions/tlw_jobs_cpt.php');

/* REGISTER POSITIONS TAX */
include (TEMPLATEPATH . '/_/functions/tlw_positions_tax.php');

/* AFC OPTIONS FUNCTIONS */
include (TEMPLATEPATH . '/_/functions/afc_options_functions.php');

/* FORM ACTIONS */
include (TEMPLATEPATH . '/_/functions/gform_functions.php');

/* AFC SAVE FUNCTIONS */
include (TEMPLATEPATH . '/_/functions/afc_save_post.php');

/* SEND NEWSLETTER TO DOTMAILER */
include (TEMPLATEPATH . '/_/functions/submit_newsletter.php');

/* GET BROWSER */
include (TEMPLATEPATH . '/_/functions/get_browser.php');

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu list-unstyled" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

function add_gf_cap() {	
   $id = 2;
   $role = new WP_User( $id );
   $role->add_cap( 'gravityforms_edit_forms' );
   $role->add_cap( 'gravityforms_view_entries' );
   $role->add_cap( 'gravityforms_edit_entries' );
   $role->add_cap( 'gravityforms_export_entries' );
   $role->add_cap( 'gravityforms_view_entry_notes' );
   $role->add_cap( 'gravityforms_edit_entry_notes' );
}
add_action( 'admin_init', 'add_gf_cap' );

function truncate($string,$length=100,$append="&hellip;") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
function my_mce_buttons_2( $buttons ) {
	//echo '<pre>';print_r($buttons);echo '</pre>';
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );
function my_mce_before_init( $settings ) {

    $style_formats = array(
    	array(
    		'title' => 'Intro',
    		'selector' => 'p',
    		'classes' => 'intro bold'
    	),
    	
    	array(
    		'title' => 'Lead',
    		'selector' => 'p',
    		'classes' => 'lead'
    	),
    	
    	array(
    		'title' => 'H2 Caps',
    		'selector' => 'h2',
    		'classes' => 'caps'
    	),
        array(
        	'title' => 'Red Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-red'
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
    
    add_editor_style();

}

function tlw_theme_get_archives_link ( $link_html ) {
    global $wp;
    static $current_url;
    if ( empty( $current_url ) ) {
        $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
    }
    if ( stristr( $link_html, $current_url ) !== false ) {
        $link_html = preg_replace( '/(<[^\s>]+)/', '\1 class="active"', $link_html, 1 );
    }
    return $link_html;
}
add_filter('get_archives_link', 'tlw_theme_get_archives_link');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter('ysacf_exclude_fields', function(){
    return array(
        'page_colour',
        'page_icon',
        'sections_active',
    );
});

/* Disable WordPress Admin Bar for all users but admins. */
 add_filter('show_admin_bar', '__return_false');

 ?>