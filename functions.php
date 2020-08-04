 
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
    wp_enqueue_script( 'strongertogether-customjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'strongertogether_register_scripts' );
//


// * Bootstrap  NavBar

require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

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
