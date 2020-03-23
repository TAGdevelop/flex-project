<?php if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- ONLY USED IF ELEMENTOR HEADR NOT SET -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <?php if (get_field('google_tag_selector', 'options') == 0 && !empty(get_field('google_tag_manager', 'options'))): ?>
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
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- START GEO META -->
          <?php if (get_field('general_address_country', 'options') ) : ?>
            <meta name="geo.region" content="<?php the_field('general_address_country', 'options'); ?>-<?php the_field('general_address_state', 'options'); ?>" />
             <?php endif; ?>
              <?php if (get_field('general_address_city', 'options') ) : ?>
          <meta name="geo.placename" content="<?php the_field('general_address_city', 'options'); ?>" />
           <?php endif; ?>
            <?php if (get_field('general_address_latitude', 'options') ) : ?>
          <meta name="geo.position" content="<?php the_field('general_address_latitude', 'options'); ?>;<?php the_field('general_address_longitude', 'options'); ?>" />
          <meta name="ICBM" content="<?php the_field('general_address_latitude', 'options'); ?>, <?php the_field('general_address_longitude', 'options'); ?>" />
           <?php endif; ?>
           <?php if (get_field('copyright_company', 'options') ) : ?>
          <meta name="copyright" content="<?php the_field('copyright_company', 'options'); ?>" />
           <?php endif; ?>
            <!-- END GEO META -->
    <?php wp_head(); ?>
  
    
</head>
<body id="tag_theme" <?php body_class(); ?>>

    <div style="display:none;"></div>
        
