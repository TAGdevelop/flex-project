<?php
/*

@package bullish

   ===============
   WP FRONTEND ENQUEUE HERE
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



function theme_bullish_main_enqueue_styles() {
    wp_enqueue_style( 'corestylecss', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'bootstrap4', get_template_directory_uri() . '/assets/vendor/bootstrap4/css/bootstrap.min.css' );
// wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/vendor/swiper/swiper.min.css' );
wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_bullish_main_enqueue_styles');


// Register Script for template part
if (!function_exists('theme_scripts')) {
  function tag_enqueue_theme_scripts($type) {
    if($type==='tagsliderv21'):
        
      /** OLD scripts and css needed for tagSlider 
       ** should be re-written with bootstrap 4 and swiper js
       ** swiper slider library seems to load with elementor
       **/
wp_enqueue_style( 'bootstrap3css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
wp_enqueue_style( 'instagramcss',get_template_directory_uri() . '/assets/vendor/instagram-filters/instagram.min.css', '0.1.4', 'all');
wp_enqueue_style( 'owlcss',get_template_directory_uri() . '/assets/deprecated/owl.carousel.min.css');
wp_enqueue_style( 'owlthemecss',get_template_directory_uri() . '/assets/deprecated/owl.theme.default.min.css');
wp_enqueue_style( 'oldmaincss',get_template_directory_uri() . '/assets/deprecated/old-main.css');
         
wp_enqueue_script( 'old-main-js',get_template_directory_uri() . '/assets/deprecated/old.main.js');
wp_enqueue_script( 'owl-js',get_template_directory_uri() . '/assets/deprecated/owl.carousel.min.js');
wp_enqueue_script( 'bootstrap3js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

   /** END OLD scripts **/    
    
  

    elseif($type==='other_template_part'):
       // enqueue scripts
    endif;
 }
}

// END Register Script for template part

function themebullish_main_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap4js', get_template_directory_uri() . '/assets/vendor/bootstrap4/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true); 

}
add_action( 'wp_enqueue_scripts', 'themebullish_main_enqueue_scripts');



/*
   ===============
   ELEMENTOR EDITOR FROM THE FRONTEND
   Probably not need if top menu is deactivated using Branda
   ===============
   
*/

/*
/// Target User Roles 
function frontend_wjm_admin_user_css() {
    $user = wp_get_current_user();
    if ( in_array( 'administrator', (array) $user->roles ) ) {
     //do something
    } elseif ( in_array( 'seo_editor', (array) $user->roles ) ) {
       //do something
    } elseif ( in_array( 'client_admin', (array) $user->roles ) ) {
      
        wp_enqueue_style( 'aioseo_mask_css', get_stylesheet_directory_uri().'/assets/css/backend/dashboard-client-admin.css' );
    } else {
       // do something
    
    }
}
add_action( 'wp_enqueue_scripts', 'frontend_wjm_admin_user_css' );
*/




