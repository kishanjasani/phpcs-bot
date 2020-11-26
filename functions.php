<?php
/**
 * Theme Functions.
 *
 * @package Aquila_Portfolio
 */

/**
 * Register styles and scripts.
 *
 * @action wp_enqueue_scripts
 */
function aquila_portfolio_enqueue_script() {
	wp_enqueue_script( 'jquery'  );
}

add_action( 'wp_enqueue_scripts', 'aquila_portfolio_enqueue_script'   );