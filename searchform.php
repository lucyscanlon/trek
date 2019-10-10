<div class="searchform-container">
  <form role="search" method="get"
    action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-field Montserrat" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'trek' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'trek' );?>"/>
      <input type="hidden" name="post_type" value="search" />
  </form>
</div>
