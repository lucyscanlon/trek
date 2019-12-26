<?php

function trek_import_files() {
  return array(
  array(
    'import_file_name' => 'Demo Demo Data',
    'categories' => array('New Category', 'Old category' ),
    'local_import_file' => trailingslashit( get_template_directory() ) .'/inc/requiredplugins/democontent/theroadtripper.WordPress.2019-12-12.xml',
    'local_import_widget_file' => trailingslashit( get_template_directory() ) .'/inc/requiredplugins/democontent/www.lucyisobeltrekdemo.online-widgets.wie',
    'import_notice' => __('Click the button below to import the demo content. This may take a few minutes.', 'trek'),
  ),
);
}

add_filter( 'pt-ocdi/import_files', 'trek_import_files');
