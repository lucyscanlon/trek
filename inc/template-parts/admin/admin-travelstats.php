<?php $widgetLink = esc_url( admin_url( 'widgets.php' ) );?>

<h1>Travel Stats Widget</h1>
<h3>Keep your readers up to date with your travel stats!</h3>
<p>
  This is the settings page for the Travel Stats widget, an optional widget which can be displayed on your sidebar to show your travel tally! Add it to your sidebar <a href="<?php echo $widgetLink; ?>">here</a>.
</p>
<?php settings_errors(); ?>

<form method="post" action="options.php">
  <?php settings_fields('trek-travelstats-group'); ?>
  <?php do_settings_sections('trek_settings_travelstats')?>
  <?php submit_button(); ?>
</form>
