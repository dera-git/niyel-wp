<?php
function codex_custom_init() {

    // Docs & Files
    $labels = array(
        'name'                  => 'Docs & Files',
        'singular_name'         => 'doc',
        'add_new'               => 'Add a doc',
        'add_new_item'          => 'Add a new doc',
        'edit_item'             => 'Edit a doc',
        'new_item'              => 'New doc',
        'all_items'             => 'All docs & files',
        'view_item'             => 'See doc',
        'search_items'          => 'Search doc',
        'not_found'             =>  'No doc found',
        'not_found_in_trash'    => 'No doc found in the trash',
        'parent_item_colon'     => '',
        'menu_name'             => 'Docs & Files',
    );
    $args = array(
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'docs'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'show_in_rest'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-format-aside',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
    );
    register_post_type('doc', $args);

    // Press
    $labels = array(
        'name'                  => 'Press',
        'singular_name'         => 'press',
        'add_new'               => 'Add a press',
        'add_new_item'          => 'Add a new press',
        'edit_item'             => 'Edit a press',
        'new_item'              => 'New press',
        'all_items'             => 'All press',
        'view_item'             => 'See press',
        'search_items'          => 'Search press',
        'not_found'             =>  'No press found',
        'not_found_in_trash'    => 'No press found in the trash',
        'parent_item_colon'     => '',
        'menu_name'             => 'Press',
    );
    $args = array(
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'press'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'show_in_rest'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-welcome-write-blog',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
    );
    register_post_type('press', $args);

    // Career
    $labels = array(
        'name'                  => 'Career',
        'singular_name'         => 'career',
        'add_new'               => 'Add a career',
        'add_new_item'          => 'Add a new career',
        'edit_item'             => 'Edit a career',
        'new_item'              => 'New career',
        'all_items'             => 'All career',
        'view_item'             => 'See career',
        'search_items'          => 'Search career',
        'not_found'             =>  'No career found',
        'not_found_in_trash'    => 'No career found in the trash',
        'parent_item_colon'     => '',
        'menu_name'             => 'Career',
    );
    $args = array(
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'career'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'show_in_rest'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-networking',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
    );
    register_post_type('career', $args);

    // Project
    $labels = array(
        'name'                  => 'Project',
        'singular_name'         => 'project',
        'add_new'               => 'Add a project',
        'add_new_item'          => 'Add a new project',
        'edit_item'             => 'Edit a project',
        'new_item'              => 'New project',
        'all_items'             => 'All project',
        'view_item'             => 'See project',
        'search_items'          => 'Search project',
        'not_found'             =>  'No project found',
        'not_found_in_trash'    => 'No project found in the trash',
        'parent_item_colon'     => '',
        'menu_name'             => 'Projects',
    );
    $args = array(
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'project'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'show_in_rest'          => true,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-archive',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
    );
    register_post_type('project', $args);

}
add_action('init', 'codex_custom_init');
