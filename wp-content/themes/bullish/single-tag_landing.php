<?php
/**
 * The template for displaying the defaultlanding page  template. 
 * Without it --- elementor boxed the content
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

<main <?php post_class( 'tag_bs_site_main' ); ?> role="main">

	<div class="tag_bs_lp_content">
		<?php the_content(); ?>
	</div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>