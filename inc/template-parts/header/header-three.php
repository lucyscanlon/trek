<div class="menuleft-menu-container Montserrat headerTextColor">

  <?php

  wp_nav_menu( array(
    'theme_location' => 'primary',
    'container' => false,
  ));


  ?>



</div>
<div class="menuleft-socialmedia-container headerTextColor">
  <ul class="headerTextColor">
    <?php if (( get_theme_mod('toggle_switch_twitter') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_facebook') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_instagram') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_pinterest') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_googleplus') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_youtube') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_linkedin') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_snapchat') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_goodreads') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_shop') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_email') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_vimeo') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>

        <?php
      } ?>
    <?php if (( get_theme_mod('toggle_switch_tumblr') ) == 1){
        ?><li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>

        <?php
      } ?>
      <li><i class="fas fa-search" id="searchbutton"></i></li>

  </ul>
</div>
<div class="header-search-overlay" id="opensearch">
  <div class="header-search-overlay-container">
    <div class="search-overlay-close-icon" id="closesearch">
      <i class="fas fa-times"></i>
    </div>
    <div class="header-overlay-title-container ReenieBeanie">
      <h1><?php echo esc_html__( 'Search the blog', 'trek' ); ?></h1>
    </div>
    <div class="header-search-overlay-search-container">
      <form role="search" method="get"
        action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" autofocus class="search-field Montserrat" placeholder="<?php echo esc_attr_x( 'Enter a keyword here...', 'placeholder', 'trek' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'trek' );?>"/>
          <input type="hidden" name="post_type" value="search" />
        </form>
  </div>
</div>

</div>