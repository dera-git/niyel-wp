<?php
function add_theme_scripts() {

    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/node_modules/slick-carousel/slick/slick.css', array(), null);
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/assets/node_modules/slick-carousel/slick/slick-theme.css', array(), null);
    wp_enqueue_style('animate.min', get_template_directory_uri().'/assets/node_modules/animate.css/animate.min.css', array(), null);
    wp_enqueue_style('typekit', 'https://use.typekit.net/dvm0mtm.css', array(), null);
    wp_enqueue_style('fontawesome', 'https://pro.fontawesome.com/releases/v5.15.4/css/all.css', array(), null);
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('googlefont2', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);
    wp_enqueue_style('utilities.min', get_template_directory_uri() . '/assets/css/utilities.min.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $template_version);
    wp_enqueue_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), $template_version);


    wp_enqueue_script('jquery.min', get_template_directory_uri().'/assets/node_modules/jquery/dist/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('infiniteslidev2.min', get_template_directory_uri().'/assets/js/infiniteslidev2.min.js', array(), null, true);
    wp_enqueue_script('index.min', get_template_directory_uri().'/assets/js/amtchart.index.min.js', array(), null, true);
    wp_enqueue_script('map.min', get_template_directory_uri().'/assets/js/amtchart.map.min.js', array(), null, true);
    wp_enqueue_script('continent', get_template_directory_uri().'/assets/js/amtchart.continent.js', array(), null, true);
    wp_enqueue_script('countrie2', get_template_directory_uri().'/assets/js/countrie2.js', array(), null, true);
    wp_enqueue_script('wordlow.min', get_template_directory_uri().'/assets/js/amtchart.wordlow.min.js', array(), null, true);
    wp_enqueue_script('mansory', get_template_directory_uri().'/assets/js/mansory.pkgd.min.js', array(), null, true);
    wp_enqueue_script('animate.mint', get_template_directory_uri().'/assets/js/amtchart.animate.min.js', array(), null, true);
    wp_enqueue_script('fr.min', get_template_directory_uri().'/assets//js/amtchart.geodata.fr.min.js', array(), null, true);
    wp_enqueue_script('lottie.min', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js', array(), null, true);
    wp_enqueue_script('map', get_template_directory_uri().'/assets/js/map.js', array(), null, true);
    wp_enqueue_script('waypoints.min', get_template_directory_uri().'/assets/node_modules/waypoints/lib/jquery.waypoints.min.js', array(), null, true);
    wp_enqueue_script('slick.min', get_template_directory_uri().'/assets/node_modules/slick-carousel/slick/slick.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), $template_version, true);
    wp_enqueue_script('animation', get_template_directory_uri().'/assets/js/animation.text.write.js', array(), $template_version, true);
    wp_enqueue_script('impact', get_template_directory_uri().'/assets/js/impact.js', array(), $template_version, true);
    wp_enqueue_script('form', get_template_directory_uri().'/assets/js/form-step.js', array(), $template_version, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );