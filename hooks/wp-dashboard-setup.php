<?php

// Custom Dashboard Widgets
function wbs_white_label_dashboard_widget() {
	global $wp_meta_boxes;

	// General Dashboard Widget
	wp_add_dashboard_widget(
		'wbs-white-label-dashboard-widget',
		__('Current receipes', 'wbs-custom-post-type-demo'),
		'wbs_custom_post_type_dashboard_widget_callback'
	);
}
add_action('wp_dashboard_setup', 'wbs_white_label_dashboard_widget');

function wbs_custom_post_type_dashboard_widget_callback() {
	$html = '';
	// Dashboard Widget General
	$html .= '<div class="main">';

	$args = array(
		'post_type' => 'receipe',
		'posts_per_page' => 10,
	);
	 
	$query = new WP_Query($args);
	 
	$list = '<ul>';
	if($query->have_posts()):
		while($query->have_posts()):
			$query->the_post();
			// Add example code here to get desired results.
			$list .= '<li>'.get_the_title().'</li>';
		endwhile;
		
		/* Restore original Post Data */
		wp_reset_postdata();
	endif;

	$list .= '</ul>';
		// Box 1
		$html .= '<div class="wbs-custom-post-type-demo-widget">';
			$html .= '<div class="controller-box">';
				$html .= '<h3>'.__('Latest receipes', 'wbs-custom-post-type-demo').'</h3>';
				$html .= $list;
			$html .= '</div>';

		$html .= '</div>';
	$html .= '</div>';
	echo $html;
}