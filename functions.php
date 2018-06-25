<?php
function bootstrap_jquery_scripts() {
    // Rejestracja skryptu
    wp_register_script( 'mój-skrypt', get_template_directory_uri() .
        '/bootstrap-3.3.7-dist/js/bootstrap.min.js', array( 'jquery' ) );
    // Umieszczenie skryptu w kolejce:
    wp_enqueue_script( 'mój-skrypt' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_jquery_scripts' );

add_action('init', function() {
    register_nav_menus(array(
        'main-menu' => 'Main menu'
    ));
});


/**
 * Add Bootstrap form styling to WooCommerce fields
 *
 * @since  1.0
 * @refer  http://bit.ly/2zWFMiq
 */
function iap_wc_bootstrap_form_field_args ($args, $key, $value) {

    $args['input_class'][] = 'form-control';
    return $args;
}
add_filter('woocommerce_form_field_args','iap_wc_bootstrap_form_field_args', 10, 3);