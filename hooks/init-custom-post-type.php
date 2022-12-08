<?php

/* Register Custom Post Type 'receipe' */
function wbs_register_custom_post_type_receipe(){

    // Custom Post Type Name (always singular!)
    $cpt_name = 'receipe';
    // CPT Features
    // the fields you need
    $cpt_features = array(
        'title',
        'excerpt',
        'revisions',
        'thumbnail'
    );
    // Slug / name of the archive /products (always plural)
    $cpt_slug = 'receipes';

    $labels = array(
        'name' 						=>	__('Receipe', 'wbs-custom-post-type-demo'),
        'singular_name' 			=>	__('Receipe', 'wbs-custom-post-type-demo'),
        'menu_name'					=>	__('Receipes', 'wbs-custom-post-type-demo'),
        'name_admin_bar'			=>	__('Receipes', 'wbs-custom-post-type-demo'),
        // Archive page name
        'all_items'					=>	__('Receipes', 'wbs-custom-post-type-demo'),
        'add_name'					=>	__('Add new receipes', 'wbs-custom-post-type-demo'),
        'add_new_item'				=>	__('Add new receipes', 'wbs-custom-post-type-demo'),
        'edit'						=>	__('Edit receipes', 'wbs-custom-post-type-demo'),
        'edit_item'					=>	__('Edit receipes', 'wbs-custom-post-type-demo'),
        'new_item'					=>	__('New receipes', 'wbs-custom-post-type-demo'),
        'view'						=>	__('View receipes', 'wbs-custom-post-type-demo'),
        'view_item'					=>	__('View receipe', 'wbs-custom-post-type-demo'),
        'search_items'				=>	__('Search receipes', 'wbs-custom-post-type-demo'),
        'parent'					=>	__('Parent receipe', 'wbs-custom-post-type-demo'),
        'not_found'					=>	__('No receipe found', 'wbs-custom-post-type-demo'),
        'not_found_in_trash'		=>	__('No receipe found in trash', 'wbs-custom-post-type-demo')
    );

    /* ------------------------------------------ End of Edit */
    $args = array(
        'labels'				=>	$labels,
        'public'				=>	true,
        'publicly_queryable'	=>	true,
        'exclude_from_search'	=>	false,
        'show_in_nav_menus'		=>	true,
        'show_ui'				=>	true,
        'show_in_menu'			=>	true,
        'show_in_admin_bar'		=>	true,
        'show_in_rest'			=> 	true,
        'menu_position'			=>	21,
        'menu_icon'				=>	'dashicons-editor-ol', // Dashicon
        'can_export'			=>	true,
        'delete_with_user'		=>	false,
        'hierarchical'			=>	false,
        'has_archive'			=>	true,
        'query_var'				=>	true,
        'capability_type'		=>	'post',
        'map_meta_cap'			=>	true,
        // 'capabilities'		=> array(),
        'rewrite'				=>	array(
            'slug'		=> $cpt_slug,
            'with_front'=> true,
            'pages'		=> true,
            'feeds'		=> false
        ),
        'supports'		=> $cpt_features
    );
    register_post_type($cpt_name, $args);
}
add_action('init', 'wbs_register_custom_post_type_receipe', 21);