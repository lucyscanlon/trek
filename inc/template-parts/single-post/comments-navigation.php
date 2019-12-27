<?php
/*
* The template for displaying the comments navigation
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<nav class="comment-navigation" role="navigation">
  <div class="nav-link">
    <div class="nav-whole-container">
      <div class="nav-previous-left">
        <div class="nav-left-container">
          <!--  Links to older comments   -->
          <span><i class="fas fa-long-arrow-alt-left"></i></span>
          <?php previous_comments_link( esc_html__('Older', 'trek') ) ?>
        </div>
      </div>
      <div class="nav-next-right">
        <div class="nav-right-container">
          <!--  Links to newer comments  -->
          <?php next_comments_link( esc_html__('Newer', 'trek') ) ?>
          <span><i class="fas fa-long-arrow-alt-right"></i></span>
        </div>
      </div>
    </div>
  </div>
</nav>
