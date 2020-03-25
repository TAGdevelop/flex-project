<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bullish
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
wp_body_open();
get_header(); 

   while ( have_posts() ) : the_post(); 
wp_body_code(); // used any for body code & GTM code 
//get_template_part( 'template-parts/tagAlert' ); 
get_template_part( 'template-parts/tagsliderv21' ); // convert me to elementor widget
tag_enqueue_theme_scripts('tagsliderv21'); // load scripts for elementor edit page
?>

<main  <?php post_class( 'tag_bs_pagephp' ); ?> role="main">

	<div class="page_content_page">
		<?php the_content(); ?>
	
	</div>


</main>

	<?php
endwhile;
get_footer();
