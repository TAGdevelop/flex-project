<div id="zeus">
  <h1>Plugin: ELEMENTOR</h1>
  <div class="wrap">
    <div id="poststuff">
      <div id="post-body" class="metabox-holder ">
        <!-- main content -->
        <div id="post-body-content">
          <div class="meta-box-sortables ui-sortable">
            <div class="postbox">
              <h2 class="hndle"><span>Elementor - User Roles Modification</span>
              </h2>
              <div class="inside">
                <h4>GOTO:<br>
                  /wp-content/plugins/elementor/core/role-manager/role-manager.php<br>
                  at about line 173 find  <br>
                </h4>
                <div class="col-50">
                  <div class="notice notice-warning inline all-copy">
                    FIND THIS <br>
                    <pre><code> 
  /**
   * @since 2.0.0
   * @access public
   */
  public function get_user_restrictions_array() {
    $user  = wp_get_current_user();
    $user_roles = $user->roles;
    $options = $this->get_user_restrictions();
    $restrictions = [];
    if ( empty( $options ) ) {
      return $restrictions;
    }

    foreach ( $user_roles as $role ) {
      if ( ! isset( $options[ $role ] ) ) {
        continue;
      }
      $restrictions = array_merge( $restrictions, $options[ $role ] );
    }
    return array_unique( $restrictions );
  }</code></pre>
                  </div>
                </div>
                <div class="col-50">
                  <div class="notice notice-success inline all-copy">
                    REPLACE WITH THIS <br>
                    <pre><code> 
  /**
   * @since 2.0.0
   * @access public
   */
  public function get_user_restrictions_array() {
    $user  = wp_get_current_user();
    $user_roles = $user->roles;
    $options = $this->get_user_restrictions();
    $restrictions = [];
    if ( empty( $options ) ) {
      return $restrictions;
    }

    foreach ( $user_roles as $role ) {
      if ( ! isset( $options[ $role ] ) ) {
        continue;
      }
      $restrictions = array_merge( $restrictions, $options[ $role ] );
    }
    
  if (!empty($_GET['post']) && $_GET['action'] == 'elementor') {
      $pid = $_GET['post'];
      $post_type = get_post_type($pid);
        $roles = ( array ) $user_roles;
        if (in_array('client_publisher', $roles) && $post_type == 'page') {
          $restrictions[] = 'design';
        }
    }
    
    return array_unique( $restrictions );
  }</code></pre>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
              <!-- .inside -->
            </div>
            <!-- .postbox -->
          </div>
          <!-- .meta-box-sortables .ui-sortable -->
        </div>
        <!-- post-body-content -->
      </div>
    </div>
    <!-- #poststuff -->
  </div>
  <!-- .wrap -->
  <h1>Plugin: Dashboard Welcome Elementor</h1>
  <div class="wrap">
    <div id="poststuff">
      <div id="post-body" class="metabox-holder ">
        <!-- main content -->
        <div id="post-body-content">
          <div class="meta-box-sortables ui-sortable">
            <div class="postbox">
              <h2 class="hndle"><span>Dashboard Welcome Elementor</span></h2>
              <div class="inside">
                Fix for WPMU Branda conflict - more details on issue <a href="https://github.com/helloideabox/dashboard-welcome-elementor/issues/5" target="_blank">GitHub</a>
                <h3>GOTO:<br>
                  /wp-content/plugins/dashboard-welcome-for-elementor/classes/class-dwe-admin.php<br>
                  at line 141 comment out the following <br>
                </h3>
                <div class="notice notice-success inline all-copy">
                  <pre><code>  if ( is_multisite() ) {
      $hide_settings = get_blog_option( 1, 'dwe_hide_from_subsites' );
      
      if ( $hide_settings && get_current_blog_id() != 1 ) {
        return;
      }
    }</pre>
                  </code>
                </div>
              </div>
              <!-- .inside -->
            </div>
            <!-- .postbox -->
          </div>
          <!-- .meta-box-sortables .ui-sortable -->
        </div>
        <!-- post-body-content -->
      </div>
    </div>
    <!-- #poststuff -->
  </div>
  <!-- .wrap -->
</div>
<!-- #zeus -->