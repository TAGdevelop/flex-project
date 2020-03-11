<?php
/*

@package bullish

   ===============
   THEME NORMAL FUNCTIONS FRONTEND ONLY
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



// Add tag_style + ACF option to body class
//check if plugin class exists 
// this probably won't be needed
if(class_exists('ACF')){
add_filter( 'body_class', 'tag_add_body_class' );
function tag_add_body_class( $all_classes ) {

         $primary_bg = get_field('primary_background_selector', 'option',  get_queried_object_id() ) ;

         $primary_bg  = esc_attr( trim( $primary_bg ) );

        $body_bg = get_field('body_selector', 'option',  get_queried_object_id() ) ;

         $body_bg  = esc_attr( trim( $body_bg ) );
       
       
        $all_classes[]       = 'tag_style ' . $primary_bg .' ' . $body_bg . ' ';
   

    return $all_classes;
 }
}



