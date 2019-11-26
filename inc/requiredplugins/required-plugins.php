<?php
require_once get_template_directory() . '/inc/requiredplugins/TGM-Plugin-Activation-develop/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'trek_theme_register_required_plugins' );

function trek_theme_register_required_plugins() {

  $plugins = array(
    array(
			'name'     => 'One Click Demo Import',
			'slug'     => 'one-click-demo-import',
			'required' => true,
		),

  );


  $config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',

);


    tgmpa( $plugins, $config );

}
