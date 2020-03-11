<?php 
/*

@package bullish

   ===============
   ADMIN CUSTOM POST TYPES
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}


// POST TYPES

function cptui_register_my_cpts() {

  /**
   * Post Type: Staff Members.
   */

  $labels = [
    "name" => __( "Staff Members", "custom-post-type-ui" ),
    "singular_name" => __( "Staff Member", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Staff Members", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "staff", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-external",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes", "post-formats" ],
    "taxonomies" => [ "staff_categories" ],
  ];

  register_post_type( "team_member", $args );

  /**
   * Post Type: Featured Items.
   */

  $labels = [
    "name" => __( "Featured Items", "custom-post-type-ui" ),
    "singular_name" => __( "Featured Item", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Featured Items", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "feature", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-external",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ],
    "taxonomies" => [ "feaurescategories" ],
  ];

  register_post_type( "feature", $args );

  /**
   * Post Type: Slider Items.
   */

  $labels = [
    "name" => __( "Slider Items", "custom-post-type-ui" ),
    "singular_name" => __( "Slider Item", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Slider Items", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => false,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "tag_slider", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-external",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ],
    "taxonomies" => [ "tag_sliders_cat" ],
  ];

  register_post_type( "tag_slider", $args );

  /**
   * Post Type: Landing Pages.
   */

  $labels = [
    "name" => __( "Landing Pages", "custom-post-type-ui" ),
    "singular_name" => __( "Landing page", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Landing Pages", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "tag_landing", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-welcome-write-blog",
    "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "page-attributes" ],
    "taxonomies" => [ "landing_page_categories" ],
  ];

  register_post_type( "tag_landing", $args );

  /**
   * Post Type: Legal Pages.
   */

  $labels = [
    "name" => __( "Legal Pages", "custom-post-type-ui" ),
    "singular_name" => __( "Legal Page", "custom-post-type-ui" ),
    "add_new" => __( "Add new", "custom-post-type-ui" ),
    "new_item" => __( "New tagLEGAL™", "custom-post-type-ui" ),
    "view_items" => __( "View tagLEGAL™", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Legal Pages", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "tag_legal", "with_front" => false ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-welcome-write-blog",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ],
  ];

  register_post_type( "tag_legal", $args );

  /**
   * Post Type: Alerts.
   */

  $labels = [
    "name" => __( "Alerts", "custom-post-type-ui" ),
    "singular_name" => __( "Alert", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Alerts", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "alert", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-external",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "author", "page-attributes" ],
  ];

  register_post_type( "alert", $args );

  /**
   * Post Type: Single Pages.
   */

  $labels = [
    "name" => __( "Single Pages", "custom-post-type-ui" ),
    "singular_name" => __( "Single Page", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Single Pages", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "go", "with_front" => true ],
    "query_var" => true,
    "menu_position" => '',
    "menu_icon" => "dashicons-welcome-write-blog",
    "supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ],
    "taxonomies" => [ "single_page_categories" ],
  ];

  register_post_type( "single_pages", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


// TAXONOMIES

function cptui_register_my_taxes() {

  /**
   * Taxonomy: Features Categories.
   */

  $labels = [
    "name" => __( "Features Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Features Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Features Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'feaurescategories', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "feaurescategories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
    ];
  register_taxonomy( "feaurescategories", [ "feature" ], $args );

  /**
   * Taxonomy: Sliders Category.
   */

  $labels = [
    "name" => __( "Sliders Category", "custom-post-type-ui" ),
    "singular_name" => __( "Sliders Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Sliders Category", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => false,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'tag_sliders_cat', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "tag_sliders_cat",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
    ];
  register_taxonomy( "tag_sliders_cat", [ "tag_slider" ], $args );

  /**
   * Taxonomy: Single Categories.
   */

  $labels = [
    "name" => __( "Single Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Single Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Single Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'single_page_categories', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "single_page_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
    ];
  register_taxonomy( "single_page_categories", [ "single_pages" ], $args );

  /**
   * Taxonomy: Landing Categories.
   */

  $labels = [
    "name" => __( "Landing Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Landing Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Landing Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'landing_page_categories', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "landing_page_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
  register_taxonomy( "landing_page_categories", [ "tag_landing" ], $args );

  /**
   * Taxonomy: Alert Categories.
   */

  $labels = [
    "name" => __( "Alert Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Alert Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Alert Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'alert_category', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "alert_category",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
  register_taxonomy( "alert_category", [ "alert" ], $args );

  /**
   * Taxonomy: Staff Categories.
   */

  $labels = [
    "name" => __( "Staff Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Staff Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Staff Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'staff_categories', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "staff_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
  register_taxonomy( "staff_categories", [ "team_member" ], $args );

  /**
   * Taxonomy: Legal Categories.
   */

  $labels = [
    "name" => __( "Legal Categories", "custom-post-type-ui" ),
    "singular_name" => __( "Legal Category", "custom-post-type-ui" ),
  ];

  $args = [
    "label" => __( "Legal Categories", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'legal_categories', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "legal_categories",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
  register_taxonomy( "legal_categories", [ "tag_legal" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

