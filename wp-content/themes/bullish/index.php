<?php if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

 get_header();
wp_body_open(); // used any for body code & GTM code 
//get_template_part( 'template-parts/tagAlert' ); 

?>


<div class="bs_index">
  <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
    
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p>There no posts to show</p>
  <?php endif; ?>
</div>



<?php get_footer();