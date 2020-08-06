 
 <?php

// * add Dynamic Title Tag. It needs the wp_head() command;
 function strongertogether_theme_support() {  
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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
    wp_enqueue_style('strongertogether-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-font1', "https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-font2', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" , array(), '1.0', 'all');
    wp_enqueue_style('strongertogether-owl-carousel1', get_template_directory_uri() . "/assets/css/owl.carousel.css", array(), $version , 'all');
    wp_enqueue_style('strongertogether-owl-carousel2', get_template_directory_uri() . "/assets/css/owl.theme.default.css", array(), $version , 'all');
    wp_enqueue_style('strongertogether-style', get_template_directory_uri() . "/assets/css/main.css", array(), $version , 'all');

    
    wp_enqueue_style('strongertogether-style', get_template_directory_uri() . "/style.css", array(), $version , 'all');
}

add_action('wp_enqueue_scripts', 'strongertogether_register_styles' );
//



 // * add Javascript
function strongertogether_register_scripts() {
    wp_enqueue_script( 'strongertogether-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true );
    wp_enqueue_script( 'strongertogether-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true );
    wp_enqueue_script( 'strongertogether-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.41.1', true );
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


// * Post Type

// Activity Custom Post 
//! Type DONT USE CAPS
function thingsathome_init() {
    // set up Activity labels
    $labels = array(
        'name' => 'Things to do at Home',
        'singular_name' => 'Activity',
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
        'rewrite' => array('slug' => 'Activity'),
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
    register_taxonomy('thingsathome_category', 'thingsathome', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Activity-category' )));
}
add_action( 'init', 'thingsathome_init' );

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


?>  
