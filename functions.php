<?php


// Agregando CMB2
require_once dirname(__FILE__) . '/cmb2.php';

// carga campos personalizados
require_once dirname(__FILE__) . '/inc/custom-fields.php';

//posttypes
require_once dirname(__FILE__) . '/inc/posttypes.php';

//Queries reutilizables
require_once dirname(__FILE__) . '/inc/queries-classes.php';
require_once dirname(__FILE__) . '/inc/queries-instructors.php';

/** Funciones que se cargan al cativar el tema  **/

//add dynamic title //////
function myAgency_theme_support(){
    
    $defaults = array(
		'height'               => 50,
		'width'                => 50,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
    //thumbnails for post
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    // Image Sizes
    add_image_size('medium', 510, 340, true);
    add_image_size('square', 450, 450, true);
    add_image_size('blog', 1000, 1000, true);
    
}
add_action( 'after_setup_theme', 'myAgency_theme_support');


//menussss //////
function myAgency_menus(){
    $locations = array(
        'primary' => "desktop top menu",
        'footer' => "footer menu items"
    );

    register_nav_menus( $locations );
}
add_action( 'init', 'myAgency_menus');


//add the style files //////
function myAgency_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'myAgency-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", false, '5.2.0');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style( 'myAgency-remicicon', "https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css", array(), '2.5.0', 'all');
    wp_enqueue_style( 'myAgency-fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css", array(), '2.5.0', 'all');
    wp_enqueue_style( 'myAgency-aos', "https://unpkg.com/aos@next/dist/aos.css", array(), '', 'all');
}
add_action( 'wp_enqueue_scripts', 'myAgency_register_styles');

//add the js files ///////
function myAgency_register_scripts(){
    wp_enqueue_script( 'myAgency-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true );wp_enqueue_script( 'myAgency-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), '4.0', true );
    // true means is inthe footer
    wp_enqueue_script( 'myAgency-aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '1.0', true );
    wp_enqueue_script('myAgency-main', get_template_directory_uri(). "/assets/js/main.js", array(),'1.0', true);

}
add_action( 'wp_enqueue_scripts', 'myAgency_register_scripts');


/**** WIDGET *****/
function MyAgency_widgets_sidebar(){
    register_sidebar(array(
        'name'          => 'Sidebar 1',
        'id'            => 'sidebar_widget',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="mb-0 text-white">',
        'after_title'   => '</h5><div class="line"></div>',
        
    ));
}
add_action( "widgets_init", 'MyAgency_widgets_sidebar');

function MyAgency_widgets_address(){
    register_sidebar(array(
        'name'          => 'Sidebar Address',
        'id'            => 'widget_address',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="mb-0 text-white">',
        'after_title'   => '</h5><div class="line"></div>',
        
    ));
}
add_action( "widgets_init", 'MyAgency_widgets_address');

function MyAgency_widgets_phone(){
    register_sidebar(array(
        'name'          => 'Sidebar Phone',
        'id'            => 'widget_phone',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="mb-0 text-white">',
        'after_title'   => '</h5><div class="line"></div>',
        
    ));
}
add_action( "widgets_init", 'MyAgency_widgets_phone');


/********* WIDGET AREA *********/








?>
