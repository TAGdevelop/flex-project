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
?>

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
