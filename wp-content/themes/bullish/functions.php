<?php 
/*

@package bullish

   ===============
   THEME ROOT FUNCTIONS
   ===============
   GitHub what if I change on the LOCAL server changed remotely test
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Functions split Frontend and Dashboard
function split_functions() {
    if ( is_admin()){
/*
   ===============
   THEME ADMIN DASHBOARD FUNCTIONS
   ===============
*/

include get_template_directory() . '/inc/backend/functions-admin.php';
include get_template_directory() . '/inc/backend/functions-admin-enqueue.php';
include get_template_directory() . '/inc/backend/functions-forms-lock.php';
 

    } else {
        
/*
   ===============
   THEME FRONEND FUNCTIONS
   ===============
*/        
include get_template_directory() . '/inc/frontend/functions-theme-runfirst.php';
include get_template_directory() . '/inc/frontend/functions-load-header.php';
include get_template_directory() . '/inc/frontend/functions-theme.php';
include get_template_directory() . '/inc/frontend/functions-theme-enqueue.php';

    }
}
add_action('init', 'split_functions');

/*
   ===============
   FUNCTIONS FOR ALL
   ===============
*/
include(get_template_directory() . '/inc/all/shortcodes.php' );
include(get_template_directory() . '/inc/all/custom-post-types.php' );
include(get_template_directory() . '/inc/all/functions-all.php' );



