<?php

/**
 * Snippet Name: Add admin script on custom post types
 */

function wbs_admin_scripts( $hook ) {

    global $post;

    if ($hook == 'post-new.php' || $hook == 'post.php') {

		// If the post type is "Receipe"
        if ( 'receipe' === $post->post_type ){

			// Enqueue script on admin pages
			// Takes 5 Parameters
            wp_enqueue_style(

				// 1) Unique ID for our Stylesheet WordPress calls it "Handle"
				'wbs-admin-style',

				// 2) Path to our stylesheet file
				plugins_url('./wbs-custom-post-type-demo/assets/css/wbs-admin-style.css'),

				// Dependency of some other script? No :)
				false,
				
				// Which version is this, we currently don't care, return NULL
				NULL,

				// 
				'all'
			);
        }
    }
  }
add_action( 'admin_enqueue_scripts', 'wbs_admin_scripts', 10, 1 );
