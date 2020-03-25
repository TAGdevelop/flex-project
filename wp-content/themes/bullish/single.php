<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package bullish
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); 

   while ( have_posts() ) : the_post(); 
wp_body_code(); // used any for body code & GTM code 
//get_template_part( 'template-parts/tagAlert' ); 
get_template_part( 'template-parts/tagsliderv21' ); // convert me to elementor widget
tag_enqueue_theme_scripts('tagsliderv21'); // load scripts for elementor edit page
?>
<?php get_template_part( 'template-parts/tagAlert' ); ?>
<main <?php post_class( 'tag_bs_pagephp' ); ?> role="main">

	<div class="page_content_single">
		<?php the_content(); ?>
	
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>
</main>

	<?php
endwhile;
get_footer();
