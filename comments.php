<?php

// If a password is required for a post and it has not been entered yet, this will stop comments section from opening.
if( post_password_required() ){
  return;
}

?>
<div class="comments-whole-container Montserrat">
  <div class="comments-area">
  <?php

  // Shows how many comments there are
    if ( comments_open() ) :
      echo '<div class="comments-title-wrap" id="comments">';
      echo '<h2 class="comments-title">';
      comments_number( __('No Comments', 'trek'), __('1 Comment', 'trek'), '% ' . __('Comments', 'trek') );
      echo '</h2>';
      echo '</div>';
    endif;

    trek_get_post_navigation();

    echo "<div class='comments'>";
    wp_list_comments( array(
      'avatar_size' => 50,
      'max_depth' => '',
      'style' => 'ul',
      'callback' => null,
      'type' => 'all',
      'per_page' => '',
    ) );



    echo "</div>";

    trek_get_post_navigation();


    // Comment submission form
    $fields = array(
    'author' => '<div class="author-group"><label for="author">'. __( 'Name', 'trek' ) . '</label><span class="required">*</span> <input id="author" name="author" type="text" clas="author-input" value="'. esc_attr( $commenter['comment_author'] ).'" required="required" /></div> ',

    'email' => '<div class="form-group"><label class="comment-email-label" for="email">'. __('Email', 'trek' ). '</label> <span class="required"></span><input id="email" name="email" class="form-control comment-input" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .'" required="required"  /></div>',
  );

  $args = array(
    'class_submit' => 'comments-submit-button',
    'label_submit' => 'Submit Comment',
    'fields' => apply_filters( 'comment_form_default_fields', $fields )

  );

   ?>

  <?php comment_form( $args ); ?>


  </div>
</div>
