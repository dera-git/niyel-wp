<?php
$templatepath = get_template_directory();
if ( defined( 'DOING_AJAX' ) && DOING_AJAX && is_admin() ) {
	include( $templatepath . '/function/ajax.php' );
} elseif ( is_admin() ) {
	include( $templatepath . '/function/admin.php' );
} elseif ( ! defined( 'XMLRPC_REQUEST' ) && ! defined( 'DOING_CRON' ) ) {
	include( $templatepath . '/function/front.php' );
}
include( $templatepath . '/function/all.php' );
/*//////////////////////////// Baltazare //////////////////////////////*/

function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');





