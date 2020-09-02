 
 <?php

// * add Dynamic Title Tag. It needs the wp_head() command;
 function strongertogether_theme_support() {  
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 370, 190, true ); // default Post Thumbnail dimensions (cropped)
 }
add_action('after_setup_theme', 'strongertogether_theme_support');
//
 
function strongertogether_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
} 
  
add_action('init', 'strongertogether_menus');



 // * add CSS
function strongertogether_register_styles() {

    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('strongertogether-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '1.0', 'all');
    //wp_enqueue_style('strongertogether-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array(), '1.0', 'all');
    //wp_enqueue_style('strongertogether-bootstrap-selectpicker', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css' , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-font1', "https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-font2', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-owl-carousel1', get_template_directory_uri() . "/assets/css/owl.carousel.css", array(), $version , 'all');
    wp_enqueue_style('strongertogether-owl-carousel2', get_template_directory_uri() . "/assets/css/owl.theme.default.css", array(), $version , 'all');
    wp_enqueue_style('strongertogether-style', get_template_directory_uri() . "/assets/css/main.css", array(), $version , 'all');

    
    wp_enqueue_style('strongertogether-style', get_template_directory_uri() . "/style.css", array(), $version , 'all');
}

add_action('wp_enqueue_scripts', 'strongertogether_register_styles' );
//



 // * add Javascript
function strongertogether_register_scripts() {
    wp_enqueue_script( 'strongertogether-jquery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.4.1', true );
    wp_enqueue_script( 'strongertogether-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true );
    wp_enqueue_script( 'strongertogether-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.41.1', true );
    wp_enqueue_script( 'strongertogether-bootstrap-selectpicker', "https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js", array(), '4.41.1', true );
    wp_enqueue_script( 'strongertogether-owlcarousel', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '1.0', true );
    wp_enqueue_script( 'strongertogether-owlcarouselnav', get_template_directory_uri() . "/assets/js/owl.navigation.js", array(), '1.0', true );
    wp_enqueue_script( 'strongertogether-customjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'strongertogether_register_scripts' );
//


// * Bootstrap  NavBar

require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );


// * Post Type: Things to do at Home

// Activity Custom Post 
//! Type DONT USE CAPS
function thingsathome_init() {
    // set up Activity labels
    $labels = array(
        'name' => 'Things to do at Home',
        'singular_name' => 'Things to do at Home: Activity',
        'add_new' => 'Add New Activity',
        'add_new_item' => 'Add New Activity',
        'edit_item' => 'Edit Activity',
        'new_item' => 'New Activity',
        'all_items' => 'All Things to do at Home',
        'view_item' => 'View Activity',
        'search_items' => 'Search Things to do at Home',
        'not_found' =>  'No "Things to do at Home" Found',
        'not_found_in_trash' => 'No Things to do at Home found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Things to do at Home',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'things-to-do-at-home'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'thingsathome', $args );
    
    // register taxonomy

    /*
    register_taxonomy('thingsathome_category', 'thingsathome', array('hierarchical' => true,
    'public' =>  true,
    'hierarchical' =>  true,
    'has_archive' =>  true, 
    'label' => 'Categories of Things to do at Home', 
    'query_var' => true, 
    'rewrite' => array('slug' => 'things-to-do-at-home', 'with_front' => false) 
    ));
*/
/*

    register_taxonomy('thingsathome_category', 'thingsathome', array('hierarchical' => true,
    'public' =>  true,
    'hierarchical' =>  true,
    'has_archive' =>  true, 
    'label' => 'Categories of Things to do at Home', 
    'query_var' => true, 
    'rewrite' => array('slug' => 'things-to-do-at-home', 'with_front' => true) 
    ));


*/


    register_taxonomy('thingsathome_category', 'thingsathome',         
        array(
        'hierarchical' => true, 
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category'),
        'query_var' => true, 
        'rewrite' => array( 'slug' => 'Activity-category' )));


}
add_action( 'init', 'thingsathome_init' );

// flush_rewrite_rules();

// * Post Type: Places to Visit

// Activity Custom Post 
//! Type DONT USE CAPS
function placestovisit_init() {
    // set up Activity labels
    $labels = array(
        'name' => 'Places to Visit',
        'singular_name' => 'Place to visit',
        'add_new' => 'Add New Place',
        'add_new_item' => 'Add New Place',
        'edit_item' => 'Edit Place',
        'new_item' => 'New Place',
        'all_items' => 'All Places',
        'view_item' => 'View Place',
        'search_items' => 'Search in Places',
        'not_found' =>  'No "Places" Found',
        'not_found_in_trash' => 'Place found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Places to Visit',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'places-to-visit'),
        'query_var' => true,
        'menu_icon' => 'dashicons-location-alt',
        'menu_position' => 6,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'placestovisit', $args );
    
    // register taxonomy
    register_taxonomy('placestovisit_category', 'placestovisit', 
        array(
            'hierarchical' => true, 
            'labels' => array(
                'name' => 'Categories',
                'singular_name' => 'Category'),
            'query_var' => true, 
            'rewrite' => array( 'slug' => 'place-category' )
        )
    );
}
add_action( 'init', 'placestovisit_init' );



// * Post Type: Looking after Yourself

function lookingafteryourself_init() {

    $labels = array(
        'name' => 'Looking after Yourself',
        'singular_name' => 'Looking after Yourself',
        'add_new' => 'Add New Item',
        'add_new_item' => 'Add New Items',
        'edit_item' => 'Edit Items',
        'new_item' => 'New Items',
        'all_items' => 'All Items',
        'view_item' => 'View Items',
        'search_items' => 'Search Items',
        'not_found' =>  'No Items Found',
        'not_found_in_trash' => 'No Items found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Looking after Yourself',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'looking-after-yourself'),
        'menu_position' => 7,
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'lookingafteryourself', $args );
    
    // register taxonomy
    register_taxonomy('lookingafteryourself_category', 'lookingafteryourself',         
    array(
        'hierarchical' => true, 
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category'),
        'query_var' => true, 'rewrite' => array( 'slug' => 'lookingafteryourself-category' )));
}
add_action( 'init', 'lookingafteryourself_init' );


// * Post Type: Supporting your kids

// Item Custom Post Type
function supportingyourkid_init() {
    // set up product labels
    $labels = array(
        'name' => 'Supporting your Kids',
        'singular_name' => 'Supporting you Kid',
        'add_new' => 'Add New Item',
        'add_new_item' => 'Add New Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'all_items' => 'All Items',
        'view_item' => 'View Item',
        'search_items' => 'Search Items',
        'not_found' =>  'No Items Found',
        'not_found_in_trash' => 'No Items found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Supporting your Kids',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'supporting-your-kids'),
        'query_var' => true,
        'menu_icon' => 'dashicons-smiley',
        'menu_position' => 8,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'supportingyourkid', $args );
    
    // register taxonomy
    register_taxonomy('supportingyourkid_category', 'supportingyourkid',
     array(
        'hierarchical' => true, 
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category'),
        'rewrite' => array( 'slug' => 'supportingyourkid-category' )));
}
add_action( 'init', 'supportingyourkid_init' );



// * Post Type: Local News

function localnews_init() {
    // set up product labels
    $labels = array(
        'name' => 'Local News',
        'singular_name' => 'Local News',
        'add_new' => 'Add New Item',
        'add_new_item' => 'Add New Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'all_items' => 'All Items',
        'view_item' => 'View Item',
        'search_items' => 'Search Items',
        'not_found' =>  'No Items Found',
        'not_found_in_trash' => 'No Items found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Local News',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'local-news'),
        'query_var' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'localnews', $args );
    
    // register taxonomy
    register_taxonomy('localnews_category', 'localnews',      array(
        'hierarchical' => true, 
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category'),
        'rewrite' => array( 'slug' => 'localnews-category' )));
}
add_action( 'init', 'localnews_init' );



//* WIDGETS

function strongertogether_widget_areas() {


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area', 
            'id' => 'ForFamilies',
            'description' => 'menu for Families in the Icon page' 
        )
    );

    register_sidebar(
        array(  
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area', 
            'id' => 'footer-1',
            'description' => 'Footer Widget Area' 
        ) 
    );
}

add_action ('widgets_init', 'strongertogether_widget_areas');

//


// *

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


// * Option Page for the Advanced custom Fields Plugin

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


add_filter( 'gmw_search_within_boundaries', '__return_false' );


