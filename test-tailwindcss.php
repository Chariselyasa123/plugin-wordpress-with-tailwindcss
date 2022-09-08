<?php

/**
 * @wordpress-plugin
 *
 * Plugin Name:       Test TailwindCSS
 * Plugin URI:        asdas.casc
 * Description:       test tailsdiasjd
 * Version:           0.0.1
 * Author:            hapid
 * Author URI:        elyanur.com
 */

// Checking Test Env and Direct Access File

// Enqueue Script
add_action( 'admin_enqueue_scripts', 'enqueue_scripts' );

function enqueue_scripts() {
	wp_enqueue_style( 'compiled_tailwind', plugin_dir_url( __FILE__ ) . "css/compiled.css", array(), '1.0.0' );
}

// make short code
add_shortcode( 'test_tailwind', 'testing_tailwind_css' );
function testing_tailwind_css() {
	ob_start();

	?>

    <button class="bg-red-200">test tailwindcss</button>

	<?php

	return ob_get_clean();
}

add_action( 'admin_menu', 'register_admin_menu', 1 );
function register_admin_menu() {
// Menu lwcommerce in WP-ADMIN
	add_menu_page(
		"Test Tailwind",
		"Test Tailwind",
		'manage_options',
		"test-tailwind",
		'admin_menu_callback',
		3
	);
}

function admin_menu_callback() {
	include_once "admin-menu.php";
}


