<?php

  $newPostLink = esc_url( admin_url( 'post-new.php' ) );

?>
<style>

  .nocontent-description-container a {
    color: <?php echo get_theme_mod('blog_page_link_color'); ?>
  }

  .nocontent-description-container a:hover {
    color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
  }

</style>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
  <div class="no-content-whole-container">
    <div class="nocontent-title-container ReenieBeanie">
      <h2><?php esc_html_e('No Content', 'trek'); ?></h2>
    </div>
    <div class="nocontent-description-container Montserrat">
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

<?php elseif ( is_search() ) : ?>
  <div class="nocontent-search-container">
    <div class="nocontent-search-title ReenieBeanie">
      <h2><?php esc_html_e( 'Nothing Here')  ?></h2>
    </div>
    <div class="nocontent-description-container Montserrat">
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
  <div class="nocontent-search-container">
    <div class="nocontent-search-title ReenieBeanie">
      <h2><?php esc_html_e( 'Nothing Here')  ?></h2>
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
