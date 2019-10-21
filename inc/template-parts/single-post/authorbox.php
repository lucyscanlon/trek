<?php
  $noAvatar = get_template_directory_uri() . '/img/noavatar.svg';
?>
<div class="trek-singlepost-author-theme-whole-container">
  <div class="singlepost-author-whole-container">
    <div class="singlepost-avatar-container">
      <div class="singlepost-author-avatar-circle">
        <span alt="Photo of <?php the_author_meta( 'display_name' ); ?>">
          <?php if( get_avatar( get_current_user_id() ) ) {
            echo get_avatar( get_the_author_meta( 'email'), '100' );
          } else {
          echo '<img alt="no-image" src="'.$noAvatar.'" class="avatar avatar-64 photo" height="100" width="100">';
          }?>
        </span>
      </div>
    </div>
    <div class="singlepost-info-container">
      <div class="singlepost-author-title-container Montserrat bloglinkcolor">
        <h3>Author: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></h3>
      </div>
      <div class="singlepost-author-description-container Montserrat">
        <p>
          <?php the_author_meta( 'description' ); ?>
        </p>
      </div>
      <?php
        global $user_ID;
        if ( get_the_author_meta('user_url',$user_ID) ) :
      ?>
        <div class="singlepost-author-website-container Montserrat">
          <a href="<?php the_author_meta( 'user_url' ); ?>" target="blank" ><p><?php the_author_meta( 'user_url' ); ?></p></a>
        </div>
      <?php endif; ?>
    </div>
  </div>

</div>
