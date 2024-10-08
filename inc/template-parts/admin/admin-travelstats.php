<?php
/*
* The template for displaying the Travel Stats admin page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<?php $widgetLink = esc_url( admin_url( 'widgets.php' ) );?>

<h1><?php echo __('Travel Stats Widget', 'trek') ?></h1>
<h3><?php echo __('Keep your readers up to date with your travel stats!', 'trek')?></h3>
<p>
  <?php
  echo sprintf(
    __('This is the settings page for the Travel Stats widget, an optional widget which can be displayed on your sidebar to show your travel tally! Add it to your sidebar <a href="%s">here</a>', 'trek'),
    esc_url( $widgetLink )
  );

  ?>
</p>

<?php settings_errors(); ?>

<form method="post" action="options.php">
  <?php settings_fields('trek-travelstats-group'); ?>
  <?php do_settings_sections('trek_settings_travelstats')?>
  <?php submit_button(); ?>
</form>
