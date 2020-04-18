<?php


add_shortcode('address_vertical', 'address_vert_short');
function address_vert_short($atts, $content = null){
  
  ob_start();
  ?>

<div class="address_vert tag_street"> <?php the_field('street', 'options'); ?></div>
<div class="address_vert tag_city_st_zip"><?php the_field('city', 'options'); ?>, <?php the_field('state', 'options'); ?> <?php the_field('zip', 'options'); ?></div>

  <?php
  return ob_get_clean();
}

add_shortcode('address_horizontal', 'address_horizon_short');
function address_horizon_short($atts, $content = null){
  
  ob_start();
  ?>

<span class="address_horz tag_street"><?php the_field('street', 'options'); ?></span> | <span class="address_vert tag_city_st_zip"><?php the_field('city', 'options'); ?>, <?php the_field('state', 'options'); ?> <?php the_field('zip', 'options'); ?></span>

  <?php
  return ob_get_clean();
}



add_shortcode('hours_of_operation', 'main_hours_short');
function main_hours_short($atts, $content = null){
  
  ob_start();
  ?>

<div style="font-size:18px">
    <center><h1>Bootstrap 4 flexbox</h1></center>
  

 <div class="d-flex justify-content-center mb-3 main_hours">
<?php if ( have_rows( 'main_hours', 'option' ) ) : ?>
<?php while ( have_rows( 'main_hours', 'option' ) ) : the_row(); ?>
<table class="tag_hours_table table table-striped" style="font-size:25px;">
  <tr>
    <td class="days tag_table_cell">
      Monday
    </td>
    <td>
      <?php if (get_sub_field('mo_choice') == '0' ) : ?>
      <?php if( have_rows('mo_hours_repeater') ):
        while ( have_rows('mo_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'mo_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'mo_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('mo_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('mo_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Tuesday
    </td>
    <td>
      <?php if (get_sub_field('tu_choice') == '0' ) : ?>
      <?php if( have_rows('tu_hours_repeater') ):
        while ( have_rows('tu_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'tu_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'tu_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('tu_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('tu_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Wednesday
    </td>
      <td>
      <?php if (get_sub_field('we_choice') == '0' ) : ?>
      <?php if( have_rows('we_hours_repeater') ):
        while ( have_rows('we_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'we_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'we_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('we_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('we_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Thursday
    </td>
     <td>
      <?php if (get_sub_field('th_choice') == '0' ) : ?>
      <?php if( have_rows('th_hours_repeater') ):
        while ( have_rows('th_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'th_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'th_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('th_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('th_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Friday
    </td>
     <td>
      <?php if (get_sub_field('fr_choice') == '0' ) : ?>
      <?php if( have_rows('fr_hours_repeater') ):
        while ( have_rows('fr_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'fr_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'fr_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('fr_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('fr_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Saturday
    </td>
      <td>
      <?php if (get_sub_field('sa_choice') == '0' ) : ?>
      <?php if( have_rows('sa_hours_repeater') ):
        while ( have_rows('sa_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'sa_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'sa_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('sa_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('sa_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="days tag_table_cell">
      Sunday
    </td>
       <td>
      <?php if (get_sub_field('su_choice') == '0' ) : ?>
      <?php if( have_rows('su_hours_repeater') ):
        while ( have_rows('su_hours_repeater') ) : the_row(); ?>
      <div class="time_wrapper">
         <span class="time_open"><?php the_sub_field( 'su_open' ); ?></span>-<span class="time_close"><?php the_sub_field( 'su_close'); ?></span>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (get_sub_field('su_choice') == '1' ) : ?>
      <div class="open_all">Open 24hrs</div>
      <?php endif; ?>
      <?php if (get_sub_field('su_choice') == '2' ) : ?>
      <div class="close_all">Closed</div>
      <?php endif; ?>
    </td>
  </tr>
</table>

<?php endwhile; ?>
<?php endif; ?>
  </div>
</div>
  <?php
  return ob_get_clean();
}