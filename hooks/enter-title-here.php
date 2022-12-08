<?php

/**
 *  Filter: function to change the title text of a new post
 */

function wbs_change_title_text( $title ){
	// Get the current wordpress location (edit post, settings, whatever the user is currently on)
	$screen = get_current_screen();
	// If the post type is == (equal to) "receipe" overwrite the
	// string with a new one
	if  ( 'receipe' == $screen->post_type ) {
		 $title = __('How is the dish called?', 'wbs-custom-post-type-demo');
	}
	// Return the overwritten, new string
	return $title;
}
add_filter('enter_title_here', 'wbs_change_title_text' );