<?php 
/*

@package bullish

   ===============
   FIRST RUN FUNCTIONS
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




//Remove WordPress meta version 
function bullish_remove_wp_version() {
return '';
}
add_filter('the_generator', 'bullish_remove_wp_version');





