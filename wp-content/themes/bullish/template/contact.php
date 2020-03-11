<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 * @package bullish
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();


while ( have_posts() ) : the_post();
	?>

<main <?php post_class( 'tag_contact_main' ); ?> role="main">

	<div class="tag_bs_contact_content">
		<?php the_content(); ?>
	</div>
</main>
<?php endwhile; ?>



<?php get_footer();