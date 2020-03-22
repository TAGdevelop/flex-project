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
// this probably won't be needed
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



// Add tag_style + ACF option to body class
// this probably won't be needed

add_filter( 'body_class', 'tag_add_body_class' );
function tag_add_body_class( $all_classes ) {

         $primary_bg = get_field('primary_background_selector', 'option',  get_queried_object_id() ) ;

         $primary_bg  = esc_attr( trim( $primary_bg ) );

        $body_bg = get_field('body_selector', 'option',  get_queried_object_id() ) ;

         $body_bg  = esc_attr( trim( $body_bg ) );
       
       
        $all_classes[]       = 'tag_style ' . $primary_bg .' ' . $body_bg . ' ';
   

    return $all_classes;
 }


// Google Tag Manager Options
 function acf_tag_gtm() {

      if (get_field('google_tag_selector', 'options') == 0 && !empty(get_field('google_tag_manager', 'options'))): ?>
        <!-- START GTM OPTIONS HEAD -->
          <!-- SINGLE GTM CONTAINER -->
          <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php the_field('google_tag_manager', 'options'); ?>');
          </script>
          <!-- END SINGLE GTM CONTAINER -->
          <!-- END GTM OPTIONS HEAD -->
          <?php endif; ?>
          <?php if (get_field('google_tag_selector', 'options')== 1 && !empty(get_field('gtm_1', 'options')) && !empty(get_field('gtm_2', 'options'))): ?>
          <!-- START GTM OPTIONS HEAD -->
          <!-- DOUBLE GTM CONTAINER -->
          <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php the_field('gtm_1', 'options'); ?>');
          </script>
          <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php the_field('gtm_2', 'options'); ?>');
          </script>
          <!-- END DOUBLE GTM CONTAINER -->
          <!-- END GTM OPTIONS HEAD -->
          <?php endif; ?>
          <?php if (get_field('google_tag_selector', 'options') == 2 && !empty(get_field('tag_manager_head', 'options'))): ?>
          <!-- START GTM OPTIONS HEAD -->
          <!--  GTM CONTAINER OVERRIDE -->
          <?php the_field('tag_manager_head', 'options'); ?>
          <!--  END GTM CONTAINER OVERRIDE-->
          <!-- END GTM OPTIONS HEAD -->
          <?php endif; ?>
          
          <?php

}
    add_action( 'wp_head', 'acf_tag_gtm');

} // end if ACF class exits