<?php
function tax_init() {
    // Project category
    register_taxonomy(
        'project-category',
        'project',
        array(
            'show_in_rest'              => true,
            'label'                     => 'Project Category',
            'rewrite' => array('slug'   => 'category_project'),
            'hierarchical'              => true
        )
    );
    register_taxonomy(
        'project-type',
        'project',
        array(
            'show_in_rest'              => true,
            'label'                     => 'Project Type',
            'rewrite' => array('slug'   => 'type_project'),
            'hierarchical'              => true
        )
    );

    // Doc&Files category
    register_taxonomy(
        'doc-files-category',
        'doc',
        array(
            'show_in_rest'              => true,
            'label'                     => 'Doc-Files Category',
            'rewrite' => array('slug'   => 'category_doc'),
            'hierarchical'              => true
        )
    );
    // // Post category
    // register_taxonomy(
    //     'Post category',
    //     'post',
    //     array(
    //         'show_in_rest'              => true,
    //         'label'                     => 'Post Category',
    //         'rewrite' => array('slug'   => 'category-post'),
    //         'hierarchical'              => true
    //     )
    // );
}
add_action('init', 'tax_init');