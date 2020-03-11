<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package bullish
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
<main class="site-main" role="main">

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'bullish' ); ?></p>
	</div>

</main>

<?php get_footer();
