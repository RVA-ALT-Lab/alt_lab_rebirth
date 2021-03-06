<?php 
/**
 * Custom post types setup.
 *
 * @package understrap
 */

// QUOTE post type

// Register Custom Post Type quotes
// Post Type Key: quote
function create_quote_cpt() {

  $labels = array(
    'name' => __( 'Quote', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Quote', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Quotes', 'textdomain' ),
    'name_admin_bar' => __( 'Quote', 'textdomain' ),
    'archives' => __( 'Quote Archives', 'textdomain' ),
    'attributes' => __( 'Quote Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Parent quote:', 'textdomain' ),
    'all_items' => __( 'All Quotes', 'textdomain' ),
    'add_new_item' => __( 'Add New Quote', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Quote', 'textdomain' ),
    'edit_item' => __( 'Edit Quote', 'textdomain' ),
    'update_item' => __( 'Update Quote', 'textdomain' ),
    'view_item' => __( 'View Quote', 'textdomain' ),
    'view_items' => __( 'View Quotes', 'textdomain' ),
    'search_items' => __( 'Search Quotes', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into quotes', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this quote', 'textdomain' ),
    'items_list' => __( 'quote list', 'textdomain' ),
    'items_list_navigation' => __( 'quote list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter quote list', 'textdomain' ),
  );

  $args = array(
    'label' => __( 'Quote', 'textdomain' ),
    'description' => __( 'comments from the great people we work with', 'textdomain' ),
    'labels' => $labels,
    'supports' => array('revisions', 'author', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => false,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-heart',
  );
  register_post_type( 'quote', $args );
  
  // flush rewrite rules because we changed the permalink structure -----NOT FULLY TESTED !!!!!!!!!!!!!!!!!!!!!!!!!
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_quote_cpt', 0 );



//CUSTOM POST TYPES

// Register Custom Post Type project
// Post Type Key: project
function create_project_cpt() {

    $labels = array(
        'name' => __( 'Projects', 'Post Type General Name', 'textdomain' ),
        'singular_name' => __( 'Project', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => __( 'Projects', 'textdomain' ),
        'name_admin_bar' => __( 'Project', 'textdomain' ),
        'archives' => __( 'Project Archives', 'textdomain' ),
        'attributes' => __( 'Project Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent project:', 'textdomain' ),
        'all_items' => __( 'All Projects', 'textdomain' ),
        'add_new_item' => __( 'Add New Project', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Project', 'textdomain' ),
        'edit_item' => __( 'Edit Project', 'textdomain' ),
        'update_item' => __( 'Update Project', 'textdomain' ),
        'view_item' => __( 'View Project', 'textdomain' ),
        'view_items' => __( 'View Projects', 'textdomain' ),
        'search_items' => __( 'Search Projects', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into project', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this project', 'textdomain' ),
        'items_list' => __( 'projects list', 'textdomain' ),
        'items_list_navigation' => __( 'projects list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter projects list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'project', 'textdomain' ),
        'description' => __( 'various ALT Lab projects', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => '',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'trackbacks', 'page-attributes', 'custom-fields', ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-hammer',
    );
    register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );


// Register Custom Post Type faculty
// Post Type Key: faculty
function create_faculty_cpt() {

    $labels = array(
        'name' => __( 'Faculty', 'Post Type General Name', 'textdomain' ),
        'singular_name' => __( 'Faculty', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => __( 'Faculty', 'textdomain' ),
        'name_admin_bar' => __( 'Faculty', 'textdomain' ),
        'archives' => __( 'Faculty Archives', 'textdomain' ),
        'attributes' => __( 'Faculty Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent faculty:', 'textdomain' ),
        'all_items' => __( 'All faculty', 'textdomain' ),
        'add_new_item' => __( 'Add New Faculty', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Faculty', 'textdomain' ),
        'edit_item' => __( 'Edit Faculty', 'textdomain' ),
        'update_item' => __( 'Update Faculty', 'textdomain' ),
        'view_item' => __( 'View Faculty', 'textdomain' ),
        'view_items' => __( 'View Faculty', 'textdomain' ),
        'search_items' => __( 'Search Faculty', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into faculty', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this faculty', 'textdomain' ),
        'items_list' => __( 'faculty list', 'textdomain' ),
        'items_list_navigation' => __( 'faculty list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter faculty list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'faculty', 'textdomain' ),
        'description' => __( 'the great people we work with', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => '',
        'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
        'taxonomies' => array('category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-universal-access-alt',
    );
    register_post_type( 'faculty', $args );

}
add_action( 'init', 'create_faculty_cpt', 0 );

// Post Type Key: WORKSHOPS
function create_workshop_cpt() {

    $labels = array(
        'name' => __( 'Workshops', 'Post Type General Name', 'textdomain' ),
        'singular_name' => __( 'Workshop', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => __( 'Workshops', 'textdomain' ),
        'name_admin_bar' => __( 'Workshop', 'textdomain' ),
        'archives' => __( 'Workshop Archives', 'textdomain' ),
        'attributes' => __( 'Workshop Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Workshop:', 'textdomain' ),
        'all_items' => __( 'All Workshops', 'textdomain' ),
        'add_new_item' => __( 'Add New Workshop', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Workshop', 'textdomain' ),
        'edit_item' => __( 'Edit Workshop', 'textdomain' ),
        'update_item' => __( 'Update Workshop', 'textdomain' ),
        'view_item' => __( 'View Workshop', 'textdomain' ),
        'view_items' => __( 'View Workshops', 'textdomain' ),
        'search_items' => __( 'Search Workshops', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Workshop', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this workshop', 'textdomain' ),
        'items_list' => __( 'Workshop list', 'textdomain' ),
        'items_list_navigation' => __( 'workshops list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter workshops list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'workshop', 'textdomain' ),
        'description' => __( ' ALT Lab workshops', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => '',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'trackbacks', 'page-attributes', 'custom-fields', ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-nametag',
    );
    register_post_type( 'workshop', $args );

}
add_action( 'init', 'create_workshop_cpt', 0 );

//TAXONOMIES
//create topic taxonomies, genres and tags for the post type project and faculty

//TOPICS TAXONOMY
add_action( 'init', 'create_topic_taxonomies', 0 );
function create_topic_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'topics', 'taxonomy general name' ),
    'singular_name' => _x( 'topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search topics' ),
    'popular_items' => __( 'Popular topics' ),
    'all_items' => __( 'All topics' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit topic' ),
    'update_item' => __( 'Update topic' ),
    'add_new_item' => __( 'Add New topic' ),
    'new_item_name' => __( 'New topic' ),
    'add_or_remove_items' => __( 'Add or remove topic' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Topics' ),
  );

//registers taxonomy to both project and faculty post types
  register_taxonomy('topics',array('project','workshop','tribe_events'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
    'show_in_rest'          => true,
    'rest_base'             => 'topic',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => false,
  ));
}

//EMAILS
add_action( 'init', 'create_tag_taxonomies', 0 );
function create_tag_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'emails', 'taxonomy general name' ),
    'singular_name' => _x( 'email', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search emails' ),
    'popular_items' => __( 'Popular emails' ),
    'all_items' => __( 'All emails' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit email' ),
    'update_item' => __( 'Update email' ),
    'add_new_item' => __( 'Add New email' ),
    'new_item_name' => __( 'New email Name' ),
    'separate_items_with_commas' => __( 'Separate emails with commas' ),
    'add_or_remove_items' => __( 'Add or remove emails' ),
    'choose_from_most_used' => __( 'Choose from the most used emails' ),
    'menu_name' => __( 'Emails' ),
  );

//registers taxonomy to both project, faculty, and workshop post types
  register_taxonomy('emails',array('project','faculty','workshop','tribe_events'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'email' ),
    'show_in_rest'          => true,
    'rest_base'             => 'emails',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => false,
  ));
}


//DEPT TAX
add_action( 'init', 'create_dept_taxonomies', 0 );
function create_dept_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'departments', 'taxonomy general name' ),
    'singular_name' => _x( 'department', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search departments' ),
    'popular_items' => __( 'Popular departments' ),
    'all_items' => __( 'All departments' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit departments' ),
    'update_item' => __( 'Update department' ),
    'add_new_item' => __( 'Add New department' ),
    'new_item_name' => __( 'New department' ),
    'add_or_remove_items' => __( 'Add or remove departments' ),
    'choose_from_most_used' => __( 'Choose from the most used departments' ),
    'menu_name' => __( 'Department' ),
  );

//registers taxonomy to both project and faculty post types
  register_taxonomy('departments',array('project','faculty'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'department' ),
    'show_in_rest'          => true,
    'rest_base'             => 'department',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => false,    
  ));
}


//TOOLS
add_action( 'init', 'create_tool_taxonomies', 0 );
function create_tool_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'tools', 'taxonomy general name' ),
    'singular_name' => _x( 'tools', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search tools' ),
    'popular_items' => __( 'Popular tools' ),
    'all_items' => __( 'All tools' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit tool' ),
    'update_item' => __( 'Update email' ),
    'add_new_item' => __( 'Add New tools' ),
    'new_item_name' => __( 'New tools Name' ),
    'separate_items_with_commas' => __( 'Separate tools with commas' ),
    'add_or_remove_items' => __( 'Add or remove tools' ),
    'choose_from_most_used' => __( 'Choose from the most used tools' ),
    'menu_name' => __( 'Tools' ),
  );

//registers taxonomy to both project and faculty post types
  register_taxonomy('tools',array('project', 'workshop', 'topic','tribe_events'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tool_tax' ),
    'show_in_rest'          => true,
    'rest_base'             => 'tools',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
  ));
}


//PROJECT CONCEPTS
add_action( 'init', 'create_project_concept_taxonomies', 0 );
function create_project_concept_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'concepts', 'taxonomy general name' ),
    'singular_name' => _x( 'concept', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search concepts' ),
    'popular_items' => __( 'Popular concepts' ),
    'all_items' => __( 'All concepts' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit concept' ),
    'update_item' => __( 'Update concept' ),
    'add_new_item' => __( 'Add New concept' ),
    'new_item_name' => __( 'New concept' ),
    'add_or_remove_items' => __( 'Add or remove concept' ),
    'choose_from_most_used' => __( 'Choose from the most used concepts' ),
    'menu_name' => __( 'Concepts' ),
  );

//registers taxonomy to both project and faculty post types
  register_taxonomy('concepts',array('project','workshop'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'concept' ),
    'show_in_rest'          => true,
    'rest_base'             => 'concept',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
  ));
}



//topic custom post type

// Register Custom Post Type topic
// Post Type Key: topic

function create_topic_cpt() {

  $labels = array(
    'name' => __( 'Topics', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Topic', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Topics', 'textdomain' ),
    'name_admin_bar' => __( 'Topic', 'textdomain' ),
    'archives' => __( 'Topic Archives', 'textdomain' ),
    'attributes' => __( 'Topic Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Topic:', 'textdomain' ),
    'all_items' => __( 'All Topics', 'textdomain' ),
    'add_new_item' => __( 'Add New Topic', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Topic', 'textdomain' ),
    'edit_item' => __( 'Edit Topic', 'textdomain' ),
    'update_item' => __( 'Update Topic', 'textdomain' ),
    'view_item' => __( 'View Topic', 'textdomain' ),
    'view_items' => __( 'View Topics', 'textdomain' ),
    'search_items' => __( 'Search Topics', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into topic', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this topic', 'textdomain' ),
    'items_list' => __( 'Topic list', 'textdomain' ),
    'items_list_navigation' => __( 'Topic list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Topic list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'topic', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 4,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-admin-network',
  );
  register_post_type( 'topic', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_topic_cpt', 0 );


//tool custom post type

// Register Custom Post Type tool
// Post Type Key: tool

function create_tool_cpt() {

  $labels = array(
    'name' => __( 'Tools', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Tool', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Tool', 'textdomain' ),
    'name_admin_bar' => __( 'Tool', 'textdomain' ),
    'archives' => __( 'Tool Archives', 'textdomain' ),
    'attributes' => __( 'Tool Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Tool:', 'textdomain' ),
    'all_items' => __( 'All Tools', 'textdomain' ),
    'add_new_item' => __( 'Add New Tool', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Tool', 'textdomain' ),
    'edit_item' => __( 'Edit Tool', 'textdomain' ),
    'update_item' => __( 'Update Tool', 'textdomain' ),
    'view_item' => __( 'View Tool', 'textdomain' ),
    'view_items' => __( 'View Tools', 'textdomain' ),
    'search_items' => __( 'Search Tools', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into tool', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this tool', 'textdomain' ),
    'items_list' => __( 'Tool list', 'textdomain' ),
    'items_list_navigation' => __( 'Tool list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Tool list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'tool', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'tool', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_tool_cpt', 0 );


//course custom post type

// Register Custom Post Type course
// Post Type Key: course

function create_course_cpt() {

  $labels = array(
    'name' => __( 'Courses', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Course', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Courses', 'textdomain' ),
    'name_admin_bar' => __( 'Course', 'textdomain' ),
    'archives' => __( 'Course Archives', 'textdomain' ),
    'attributes' => __( 'Course Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Course:', 'textdomain' ),
    'all_items' => __( 'All Courses', 'textdomain' ),
    'add_new_item' => __( 'Add New Course', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Course', 'textdomain' ),
    'edit_item' => __( 'Edit Course', 'textdomain' ),
    'update_item' => __( 'Update Course', 'textdomain' ),
    'view_item' => __( 'View Course', 'textdomain' ),
    'view_items' => __( 'View Courses', 'textdomain' ),
    'search_items' => __( 'Search Courses', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into course', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this course', 'textdomain' ),
    'items_list' => __( 'Course list', 'textdomain' ),
    'items_list_navigation' => __( 'Course list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Course list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'course', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('emails'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-welcome-learn-more',
  );
  register_post_type( 'course', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_course_cpt', 0 );

//self-paced course custom post type

// Register Custom Post Type Selfcourse
// Post Type Key: selfcourse

function create_selfcourse_cpt() {

  $labels = array(
    'name' => __( 'SelfCourses', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Selfcourse', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Selfcourses', 'textdomain' ),
    'name_admin_bar' => __( 'Selfcourse', 'textdomain' ),
    'archives' => __( 'Selfcourse Archives', 'textdomain' ),
    'attributes' => __( 'Selfcourse Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Selfcourse:', 'textdomain' ),
    'all_items' => __( 'All Selfcourses', 'textdomain' ),
    'add_new_item' => __( 'Add New Selfcourse', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Selfcourse', 'textdomain' ),
    'edit_item' => __( 'Edit Selfcourse', 'textdomain' ),
    'update_item' => __( 'Update Selfcourse', 'textdomain' ),
    'view_item' => __( 'View Selfcourse', 'textdomain' ),
    'view_items' => __( 'View Selfcourses', 'textdomain' ),
    'search_items' => __( 'Search Selfcourses', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into Selfcourse', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Selfcourse', 'textdomain' ),
    'items_list' => __( 'Selfcourse list', 'textdomain' ),
    'items_list_navigation' => __( 'Selfcourse list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Selfcourse list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'selfcourse', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('emails'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-clipboard',
  );
  register_post_type( 'selfcourse', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_selfcourse_cpt', 0 );

//resource custom post type

// Register Custom Post Type Resource
// Post Type Key: resource

function create_resource_cpt() {

  $labels = array(
    'name' => __( 'Resources', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Resource', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Resources', 'textdomain' ),
    'name_admin_bar' => __( 'Resource', 'textdomain' ),
    'archives' => __( 'Resource Archives', 'textdomain' ),
    'attributes' => __( 'Resource Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Resource:', 'textdomain' ),
    'all_items' => __( 'All Resources', 'textdomain' ),
    'add_new_item' => __( 'Add New Resource', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Resource', 'textdomain' ),
    'edit_item' => __( 'Edit Resource', 'textdomain' ),
    'update_item' => __( 'Update Resource', 'textdomain' ),
    'view_item' => __( 'View Resource', 'textdomain' ),
    'view_items' => __( 'View Resources', 'textdomain' ),
    'search_items' => __( 'Search Resources', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into Resource', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'textdomain' ),
    'items_list' => __( 'Resource list', 'textdomain' ),
    'items_list_navigation' => __( 'Resource list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Resource list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'resource', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('emails'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-carrot',
  );
  register_post_type( 'resource', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_resource_cpt', 0 );

//program custom post type

// Register Custom Post Type Program
// Post Type Key: program

function create_program_cpt() {

  $labels = array(
    'name' => __( 'Programs', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Program', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Programs', 'textdomain' ),
    'name_admin_bar' => __( 'Program', 'textdomain' ),
    'archives' => __( 'Program Archives', 'textdomain' ),
    'attributes' => __( 'Program Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Program:', 'textdomain' ),
    'all_items' => __( 'All Programs', 'textdomain' ),
    'add_new_item' => __( 'Add New Program', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Program', 'textdomain' ),
    'edit_item' => __( 'Edit Program', 'textdomain' ),
    'update_item' => __( 'Update Program', 'textdomain' ),
    'view_item' => __( 'View Program', 'textdomain' ),
    'view_items' => __( 'View Programs', 'textdomain' ),
    'search_items' => __( 'Search Programs', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into Program', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Program', 'textdomain' ),
    'items_list' => __( 'Program list', 'textdomain' ),
    'items_list_navigation' => __( 'Program list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Program list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'program', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('emails'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-portfolio',
  );
  register_post_type( 'program', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_program_cpt', 0 );