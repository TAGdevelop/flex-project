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
?>
<?php
while ( have_posts() ) : the_post();
	?>

<main <?php post_class( 'tag_bs_site_main' ); ?> role="main">

	<div class="tag_bs_lp_content">
		<?php the_content(); ?>
	</div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>