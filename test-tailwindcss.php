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
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

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


