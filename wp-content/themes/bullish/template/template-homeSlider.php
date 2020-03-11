<?php
/**
 * Template Name: Home tagSlider
 * Template Post Type: page, tag_legal, tag_landing
 * @package HelloElementorChild
 */

	get_header();
	while ( have_posts() ) : the_post();
?> 


<?php get_template_part( 'template-parts/tagsliderv21' );
tag_enqueue_theme_scripts('tagsliderv21');

?>



		

		<div class="tag_slider_page_content">
		<?php the_content(); ?>
	
		<?php wp_link_pages(); ?>
	</div>
	
	<?php get_template_part( 'template-parts/section','map-v1.0.1' );?>
<?php endwhile; ?>	

<?php get_footer();