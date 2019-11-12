<?php
  $newPostLink = esc_url( admin_url( 'post-new.php' ) );
?>
<!--  Checks if the user can publish posts  -->
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
  <div class="no-content-whole-container">
    <div class="nocontent-title-container ReenieBeanie">
      <h1><?php esc_html_e('No Content', 'trek'); ?></h1>
    </div>
    <div class="nocontent-description-container Montserrat bloglinkcolor">
      <!--  This links the user to create a new blog post  -->
      <?php printf(
                  '<p>' . wp_kses(
                      __( 'Ready to fill your blog with posts? click <a href="%1$s">here</a> to get started!', 'trek' ),
                      array(
                          'a' => array(
                              'href' => array(),
                            ),
                          )
                        ) . '</p>', $newPostLink
                    ); ?>
    </div>
  </div>
  <!--  Checks if it is a search instead  -->
<?php elseif ( is_search() ) : ?>
  <div class="nocontent-search-container">
    <div class="nocontent-search-title ReenieBeanie">
      <h1><?php esc_html_e( 'Nothing Here', 'trek')  ?></h1>
    </div>
    <div class="nocontent-description-container Montserrat bloglinkcolor">
      <p><?php esc_html_e('Unfortunately there was nothing here to match your search terms. Try searching using different keyterms instead.', 'trek' ); ?></p>
    </div>
    <div class="oops-search-container">
      <form role="search" method="get"
        action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" autofocus class="search-field Montserrat" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'trek' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'trek' );?>"/>
          <input type="hidden" name="post_type" value="search" />
        </form>
    </div>
  </div>
<?php else : ?>
  <!--  If the user cannot publish posts and it is not a search:  -->
  <div class="nocontent-search-container">
    <div class="nocontent-search-title ReenieBeanie">
      <h1><?php esc_html_e( 'Nothing Here')  ?></h1>
    </div>
    <div class="nocontent-description-container Montserrat">
      <p><?php esc_html_e('Unfortunately there was nothing found here. Try using the search box below.', 'trek' ); ?></p>
    </div>
    <div class="oops-search-container">
      <form role="search" method="get"
        action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" autofocus class="search-field Montserrat" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'trek' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'trek' );?>"/>
          <input type="hidden" name="post_type" value="search" />
        </form>
    </div>
  </div>
<?php endif; ?>
