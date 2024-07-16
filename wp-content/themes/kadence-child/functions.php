<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'kadence-global','kadence-header','kadence-content','kadence-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );




// Disable button from rendering on frontend in Fluent Forms
add_filter('fluentform_rendering_field_html_button', function ($html, $data, $form) {
	if ($form->id != 3) {  // Change number to your form ID
         return $html;
     }
	return '';
}, 10, 3);


add_filter('fluentform_rendering_field_html_button', function ($html, $data, $form) {
	if ($form->id != 5) {  // Change number to your form ID
         return $html;
     }
	return '';
}, 10, 3);


// END ENQUEUE PARENT ACTION

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'primary') {

        $items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-588"><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;
}

function register_menus() {     
    register_nav_menus( 
        array( 
            'principal' => 'Principal' 
        ) 
    ); 
}
add_action('init', 'register_menus');