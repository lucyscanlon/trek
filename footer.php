<?php wp_footer(); ?>
<head>
  <style>
  .footer-text-container {
    color: <?php echo get_theme_mod('header_text_color'); ?>;
  }

  .footer-text-container a {
    color: <?php echo get_theme_mod('header_text_color'); ?>;
  }

  .footer-text-container a:hover {
    color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
    transition-duration: 0.5s;
  }
  </style>
</head>



<footer>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBomy7yHFCIsQQyojkhSDbJkGcTk74LkRw&callback=initMap"
  type="text/javascript"></script>
  <div class="footer-whole-container headerbackgroundcolor">
    <div class="footer-text-container Montserrat">
      <p>&copy; <?php print get_bloginfo('name'); ?> | Website by <a href="http://www.lucyisobel.co.uk/" target="blank">Lucy Isobel</a></p>
      <p></p>
    </div>
  </div>

</footer>
</body>
</html>
