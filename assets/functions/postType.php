<?php
function create_posttype() {

	$single = "Project";
	$lower = "project";
	$plural = "Projects";
	$lowerP = "projects";

	$labels = array(
		'name'                  => $plural,
		'singular_name'         => $single,
		'menu_name'             => $plural,
		'name_admin_bar'        => $plural,
		'archives'              => $single . ' Archives',
		'attributes'            => $single . ' Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All ' . $plural,
		'add_new_item'          => 'Add New ' . $single,
		'add_new'               => 'Add New',
		'new_item'              => 'New ' . $single,
		'edit_item'             => 'Edit ' . $single,
		'update_item'           => 'Update ' . $single,
		'view_item'             => 'View ' . $single,
		'view_items'            => 'View ' . $plural,
		'search_items'          => 'Search ' . $single,
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into ' . $single,
		'uploaded_to_this_item' => 'Uploaded to this ' . $single,
		'items_list'            => 'Items ' . $single,
		'items_list_navigation' => $single . ' list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => $lowerP,
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => $single,
		'description'           => 'Information for custom ' . $lowerP,
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats'),
		'taxonomies'            => array( 'tag' , 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => $lowerP,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest' 			=> true,
        'menu_icon'             => 'dashicons-portfolio'
	);
	register_post_type( $lowerP, $args );

}
add_action( 'init', 'create_posttype');


// function create_posttype(){ 
// 	$args = array(
// 		'label' 				=> 'Projects',
// 		'labels' 				=> array('name' => __('Projects'),	'singular_name' => __('Project')),
// 		'public' 				=> true,
// 		'taxonomies' 			=> array('tag'),
// 		'has_archive' 			=> true,
// 		'rewrite' 				=> array('slug' => 'projects'),
// 		'supports' 				=> array('title','editor','thumbnail', 'posts-formats'),
// 		'show_in_rest' 			=> true,
// 		'compatibiliy_type'		=> 'post',
// 		'menu_icon' 			=> 'dashicons-portfolio'
// 	);
// 	register_post_type('projects', $args);
// }
// add_action('init', 'create_posttype');
