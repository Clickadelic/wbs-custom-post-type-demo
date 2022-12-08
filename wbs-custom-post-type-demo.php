<?php
/*
Plugin Name: WBS Custom Post Type Demo
Plugin URI:  https://www.tobias-hopp.de/de/wordpress/plugins/
Description: A plugin to show so called "Custom Post Types". In this case as a demo: receipes.
Version:     0.0.1
Author:      Tobias Hopp
Author URI:  https://www.tobias-hopp.de
License:     GPL2
License URI: https://www.tobias-hopp.de
Text Domain: wbs-custom-post-type-demo
Domain Path: /languages
*/

if(!defined('ABSPATH')) {
	exit('NaNa nAnA NaNa nAnA NaNa nAnA Batman!');
}

// Load the plugin textdomain "wbs-custom-post-type-demo"
function wbs_custom_post_type_demo_textdomain() {
	load_plugin_textdomain(
		'wbs-custom-post-type-demo',
		false,
		'/wbs-custom-post-type-demo/languages/');
}
add_action('init', 'wbs_custom_post_type_demo_textdomain');

// Custom Post Type "receipe"
require 'hooks/init-custom-post-type.php';

// Change "Enter title here" text
// require 'hooks/enter-title-here.php';

// Receipe Categories
// require 'hooks/init-receipe-categories.php';

// Receipe Tags
// require 'hooks/init-receipe-tags.php';

// Include a dashboard widget
// require 'hooks/wp-dashboard-setup.php';

// Include stylesheet in the admin screen
// require 'hooks/admin-enqueue-scripts.php';

// Include some meta fields
// require 'hooks/add-meta-boxes.php';