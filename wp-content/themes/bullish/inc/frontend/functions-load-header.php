<?php
/*

@package bullish

   ===============
   THEME FUNCTIONS
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



//check if plugin class exists 
if(class_exists('ACF')){
    function acf_tag_style_css() {
    $primary_bg_color = get_field('color_primary_bg', 'options');
    $primary_trans_color = get_field('color_primary_translucent', 'options');
    $primary_color = get_field('color_primary_text', 'options');
    $primary_link = get_field('color_primary_link', 'options');
    $primary_hover = get_field('color_primary_link_hover', 'options');
    
    ?>
    <style type="text/css">
        :root{
        --primary_bgcolor:<?php echo $primary_bg_color ?>;
        --primary_translucent:<?php echo $primary_trans_color ?>;
        --primary_color:<?php echo $primary_color ?>;
        --primary_link:<?php echo $primary_link ?>;
        --primary_hover:<?php echo $primary_hover ?>;
    }
    </style>
    <?php
    }
    add_action( 'wp_head', 'acf_tag_style_css');
    
    function acf_tag_header_code() {
         if (get_field('tag_header_tag') )  { 
              the_field('tag_header_tag');
         } 
    		 	 
    		
    
    }
    add_action( 'wp_head', 'acf_tag_header_code');

} // end if ACF class exits