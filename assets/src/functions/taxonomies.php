<?php
//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name'                       => _x( 'Tags', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tags', 'text_domain' ),
		'all_items'                  => __( 'All Tags', 'text_domain' ),
		'parent_item'                => __( 'Parent Tag', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'text_domain' ),
		'new_item_name'              => __( 'New Tag Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Tag', 'text_domain' ),
		'edit_item'                  => __( 'Edit Tag', 'text_domain' ),
		'update_item'                => __( 'Update Tag', 'text_domain' ),
		'view_item'                  => __( 'View Tag', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Tag', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Tag', 'text_domain' ),
		'search_items'               => __( 'Search Tag', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Tagns', 'text_domain' ),
		'items_list'                 => __( 'Tags list', 'text_domain' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'text_domain' ),
  ); 

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_in_rest' 			         => true,
    'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
    'update_count_callback'      => '_update_post_term_count',
    'query_var'                  => true,
    'has_archive'                => false,
    'show_tagcloud'              => false,
    'sort'                       => true,
    'rewrite'                    => array( 'slug' => 'tag' ,'with_front' => true),
  );

  register_taxonomy('tag',array('projects'),$args);
}

add_action( 'init', 'create_tag_taxonomies');
