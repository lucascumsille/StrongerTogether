 
 <?php

// * add Dynamic Title Tag. It needs the wp_head() command;
 function followandrew_theme_support() {  
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
 }
add_action('after_setup_theme', 'followandrew_theme_support');
//
 
function followandrew_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
} 
  
add_action('init', 'followandrew_menus');
 

 // * add CSS
function followandrew_register_styles() {

    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '1.0', 'all');
    wp_enqueue_style('followandrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array(), '1.0', 'all');
    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array(), $version , 'all');
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles' );
//



 // * add Javascript
function followandrew_register_scripts() {
    wp_enqueue_script( 'followandrew-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true );
    wp_enqueue_script( 'followandrew-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true );
    wp_enqueue_script( 'followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.41.1', true );
    wp_enqueue_script( 'followandrew-customjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'followandrew_register_scripts' );
//


// * Bootstrap

require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

//* WIDGETS

function followandrew_widget_areas() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area', 
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area' 
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

add_action ('widgets_init', 'followandrew_widget_areas');

//

?>  
