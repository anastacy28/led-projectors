<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'led_styles' );
add_action( 'wp_footer', 'led_scripts_footer' );

function led_styles() {
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/main.css'  );
wp_enqueue_style( 'slick',  get_template_directory_uri() . '/assets/slick/slick2.css');
wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.css');
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css');
}
function led_scripts_footer() {
wp_deregister_script( 'jquery-core' );
wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/jquery-2.2.1.min.js');
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'popups', get_template_directory_uri() . '/assets/js/popups.js', array(), '1.0.0', true );
wp_enqueue_script( 'count', get_template_directory_uri() . '/assets/js/count.js', array(), '1.0.0', true );
wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true );
wp_enqueue_script( 'go_top', get_template_directory_uri() . '/assets/js/go_top.js', array(), null, true );
wp_enqueue_script( 'popup', get_template_directory_uri() . '/assets/js/popup.js', array(), '1.0.0', true );
wp_enqueue_script( 'count', get_template_directory_uri() . '/assets/js/count.js', array(), null, false );
wp_enqueue_script( 'popups', get_template_directory_uri() . '/assets/js/popups.js', array(), null, true );
wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array(), null, true);
wp_enqueue_script( 'slick_min', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true);
wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slider_init.js', array(), null, false );
wp_enqueue_script( 'fancybox_js', get_template_directory_uri() . '/assets/fancybox/jquery.fancybox.js', array(), null, false );
wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array('jquery'), null, true);
}


add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

