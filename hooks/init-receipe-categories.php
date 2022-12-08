<?php

/* Register taxonomy / Receipe categories */
function wbs_register_taxonomy_receipe_categories() {
    // Where to register the Taxonomy > which post type
    $cpt_name = 'receipe';
    // Taxonomy Name
    $cpt_slug = 'nutrition-category';

    // Taxonomy Labels
    $labels = array(
        'name'						=>	__('Receipe category', 'wbs-custom-post-type-demo'),
        'singular_name'				=>	__('Receipe category', 'wbs-custom-post-type-demo'),
        'search_items'				=>	__('Search receipe categories', 'wbs-custom-post-type-demo'),
        'popular_items'				=>	__('Popular receipe categories', 'wbs-custom-post-type-demo'),
        'all_items'					=>	__('All receipe categories', 'wbs-custom-post-type-demo'),
        'parent_item'				=>	null,
        'parent_item_colon'			=>	null,
        'edit_item'					=>	__('Edit receipe category', 'wbs-custom-post-type-demo'),
        'update_item'				=>	__('Update receipe category', 'wbs-custom-post-type-demo'),
        'add_new_item'				=>	__('Add new receipe category', 'wbs-custom-post-type-demo'),
        'new_item_name'				=>	__('New receipe category','wbs-custom-post-type-demo'),
        'separate_items_with_commas'=>	__('Separate receipe categories', 'wbs-custom-post-type-demo'),
        'add_or_remove_items'		=>	__('Add or remove receipe category', 'wbs-custom-post-type-demo'),
        'choose_from_most_used'		=>	__('Choose from most used receipe categories', 'wbs-custom-post-type-demo'),
        'not_found'					=>	__('No receipe categories found', 'wbs-custom-post-type-demo'),
        'not_found__in_trash'		=>	__('No receipe categories found in trash', 'wbs-custom-post-type-demo'),
        'menu_name'					=>	__('Receipe categories', 'wbs-custom-post-type-demo')
    );	

    // Taxonomy Args
    $args = array(
        'hierarchical'				=>	true,
        'labels'					=>	$labels,
        'show_ui'					=>	true,
        'show_admin_column'			=>	true,
        'update_count_callback'		=>	'_update_post_term_count',
        'query_var'					=>	true,
            'rewrite'					=> array(
                'slug'	=> 	$cpt_slug
        )
    );

    register_taxonomy($cpt_slug, $cpt_name, $args);
}
add_action('init', 'wbs_register_taxonomy_receipe_categories');