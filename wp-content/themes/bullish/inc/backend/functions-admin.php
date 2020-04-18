<?php 
/*

@package bullish

   ===============
   ADMIN FUNCTIONS
   ===============
   
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// theme support to display items in admin dashboard 

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );

// ACF Global Options

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'tagGLOBAL™',
		'menu_title'	=> 'tagGLOBAL™',
		'menu_slug' 	=> 'tag-global',
		'position'      => '59.3',
		'icon_url'      => 'dashicons-admin-site-alt3',
		'updated_message' => __("tagGlobal™ Options Updated", 'acf'),
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Company Info',
		'menu_title'	=> 'Company Info',
		'parent_slug'	=> 'tag-global',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'tag-global',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Hours of Operation',
		'menu_title'	=> 'Hours of Operation',
		'parent_slug'	=> 'tag-global',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Google Tag Manager',
		'menu_title'	=> 'Google Tag Manager',
		'parent_slug'	=> 'tag-global',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Header-Footer Code',
		'menu_title'	=> 'Header-Footer Code',
		'parent_slug'	=> 'tag-global',
	));
			acf_add_options_sub_page(array(
		'page_title' 	=> 'Forms Lock',
		'menu_title'	=> 'Forms Lock',
		'parent_slug'	=> 'tag-global',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Colors',
		'menu_title'	=> 'Theme Colors',
		'parent_slug'	=> 'tag-global',
	));
	
}

/*
 * COMMENTS
 * Remove comments in its entirety
*/
 
	// Removes from admin menu
	add_action( 'admin_menu', 'pk_remove_admin_menus' );
	function pk_remove_admin_menus() {
	    remove_menu_page( 'edit-comments.php' );
	}
 
	// Removes from post and pages
	add_action('init', 'pk_remove_comment_support', 100);
 	function pk_remove_comment_support() {
	   remove_post_type_support( 'post', 'comments' );
	   remove_post_type_support( 'page', 'comments' );
	}
 
	// Removes from admin bar
	add_action( 'wp_before_admin_bar_render', 'pk_remove_comments_admin_bar' );
	function pk_remove_comments_admin_bar() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
 


// function to remove the dashboard widgets, but only for non-admin users
// if you want to remove the widgets for admin(s) too, remove the 'if' statement within the function
function remove_dashboard_widgets() {
//	if ( ! current_user_can( 'manage_options' ) ) {	
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
		remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal');
	}
// }
 
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );


// Hide Elementor folder in Media Library - ugly css & txt files
// were visible to site users
function media_library_hide_elementor_fonts($where) {
   if(isset($_POST['action']) && ( $_POST['action'] == 'query-attachments')) {
      $where .= ' AND guid NOT LIKE "%wp-content/uploads/elementor%"';
   }

   return $where;
}

add_filter('posts_where', 'media_library_hide_elementor_fonts');


// MULTISITE ALLOW unfiltered_html capability in WP role editor plugin
function tsg_unfilter_multisite( $caps, $cap, $user_id, $args ) {
               if ( $cap == 'unfiltered_html' ) {
                              unset( $caps );
                              $caps[] = $cap;
               }
               return $caps;
}
add_filter( 'map_meta_cap', 'tsg_unfilter_multisite', 10, 4 );
 
add_filter('acf/allow_unfiltered_html', '__return_true',20,10);
// Then assign “unfiltered_html” for role you want.



//Stop wordpress from adding HTML <p> to content
remove_filter ( 'the_content', 'wpautop' );


// Removes scheduled trash deletions
function wpb_remove_schedule_delete() {
  remove_action( 'wp_scheduled_delete', 'wp_scheduled_delete' );
}
add_action( 'init', 'wpb_remove_schedule_delete' );
// Sidebar Auto-Collapse Formidable Forms Prevention
add_filter( 'frm_admin_full_screen_class', 'frm_keep_full_screen' );
function frm_keep_full_screen(){
  return '';
}
// ADD Page Template Column in Admin View
add_filter( 'manage_pages_columns', 'page_column_views' );
add_action( 'manage_pages_custom_column', 'page_custom_column_views', 5, 2 );
function page_column_views( $defaults )
{
   $defaults['page-layout'] = __('Template');
   return $defaults;
}
function page_custom_column_views( $column_name, $id )
{
   if ( $column_name === 'page-layout' ) {
       $set_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
       if ( $set_template == 'default' ) {
           echo 'Default';
       }
       $templates = get_page_templates();
       ksort( $templates );
       foreach ( array_keys( $templates ) as $template ) :
           if ( $set_template == $templates[$template] ) echo $template;
       endforeach;
   }
}


// ADD SHORTCODE to ACF Text Fields
add_filter('acf/format_value/type=textarea', 'do_shortcode');


/**
 *  Images get post name if alt is empty
 * 
 **/
function get_alt($pid = null)
{
    global $post;
    if ($pid == null) {
       $pid = $post->ID;
    }

    $thumbnail_id = get_post_thumbnail_id($pid);
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    if ($alt != '') {
        return esc_html( $alt );
    }
    return esc_html( get_the_title() );
}

function get_alt_acf($image)
{
    if (!is_array($image)) {
        return "";
    }
    if ($image['alt'] != '') {
        return esc_html($image['alt']);
    }
    return esc_html($image['title']);
}

// Allow shortcode in acf fields
add_filter('acf/format_value/type=textarea', 'do_shortcode');



/* helper function to get formidable forms to ACF: */
function get_forms(){
    $results = array();
    foreach (FrmForm::get_published_forms() as $published_form) {
        $results[$published_form->id] = $published_form->name;
    }
    return $results;
}
/* auto populate acf field with form IDs */
function load_forms_function( $field ){
  $result = get_forms();
  if( is_array($result) ){
    $field['choices'] = array();
    foreach( $result as $key=>$match ){
      $field['choices'][ $key ] = $match;
    }
  }
    return $field;
}
add_filter('acf/load_field/name=formidable_ids', 'load_forms_function');


/* disable guntenberg editor */

add_filter('use_block_editor_for_post', '__return_false', 10);

/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}
 
	/*
	 * Nonce verification
	 */
	if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
		return;
 
	/*
	 * get the original post id
	 */
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	/*
	 * and all the original post data then
	 */
	$post = get_post( $post_id );
 
	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * if post data exists, create the post duplicate
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * new post data array
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * insert the post by wp_insert_post() function
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * duplicate all post meta just in two SQL queries
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				if( $meta_key == '_wp_old_slug' ) continue;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * finally, redirect to the edit post screen for the new draft
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate Item</a>';
	}
	return $actions;
}
 
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

// END DUPLICATE FUNCTION 


