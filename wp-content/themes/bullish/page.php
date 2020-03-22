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
get_header(); 

   while ( have_posts() ) : the_post(); 
?>
<?php get_template_part( 'template-parts/tagAlert' ); ?>
<main  <?php post_class( 'tag_bs_pagephp' ); ?> role="main">

	<div class="page_content_page">
		<?php the_content(); ?>
	
	</div>


</main>

	<?php
endwhile;
get_footer();
