<?php
if (! defined('SAASLAUNCHER_VERSION')) {
	// Replace the version number of the theme on each release.
	define('SAASLAUNCHER_VERSION', wp_get_theme()->get('Version'));
}
define('SAASLAUNCHER_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('SAASLAUNCHER_DIR', trailingslashit(get_template_directory()));
define('SAASLAUNCHER_URL', trailingslashit(get_template_directory_uri()));

if (! function_exists('saaslauncher_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function saaslauncher_support()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		// Add support for block styles.
		add_theme_support('wp-block-styles');
		add_theme_support('post-thumbnails');
		// Enqueue editor styles.
		add_editor_style('style.css');
		// Removing default patterns.
		remove_theme_support('core-block-patterns');

		load_theme_textdomain('saaslauncher', get_template_directory());
	}

endif;
add_action('after_setup_theme', 'saaslauncher_support');

// print_r( get_template_directory() );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (! function_exists('saaslauncher_styles')) :
	function saaslauncher_styles()
	{
		// registering style for theme
		wp_enqueue_style('saaslauncher-style', get_stylesheet_uri(), array(), SAASLAUNCHER_VERSION);
		wp_enqueue_style('saaslauncher-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
		wp_enqueue_style('saaslauncher-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
		if (is_rtl()) {
			wp_enqueue_style(
				'saaslauncher-rtl-css',
				get_template_directory_uri() . '/assets/css/rtl.css',
				array(),
				SAASLAUNCHER_VERSION
			);
		}
		wp_enqueue_script('saaslauncher-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), SAASLAUNCHER_VERSION, true);
		wp_enqueue_script('saaslauncher-scripts', get_template_directory_uri() . '/assets/js/saaslauncher-scripts.js', array('jquery'), SAASLAUNCHER_VERSION, true);
	}
endif;

add_action('wp_enqueue_scripts', 'saaslauncher_styles');

/**
 * Enqueue scripts for admin area
 */
function saaslauncher_admin_style()
{
	if (function_exists('get_current_screen')) {
		$saaslauncher_notice_current_screen = get_current_screen();
	}
	if ((! empty($_GET['page']) && 'about-saaslauncher' === $_GET['page']) || $saaslauncher_notice_current_screen->id === 'themes' || $saaslauncher_notice_current_screen->id === 'dashboard' || $saaslauncher_notice_current_screen->id === 'plugins') {
		wp_enqueue_style('saaslauncher-admin-style', get_template_directory_uri() . '/inc/admin/css/admin-style.css', array(), SAASLAUNCHER_VERSION, 'all');
		wp_enqueue_script('saaslauncher-admin-scripts', get_template_directory_uri() . '/inc/admin/js/saaslauncher-admin-scripts.js', array('jquery'), SAASLAUNCHER_VERSION, true);
		wp_localize_script(
			'saaslauncher-admin-scripts',
			'saaslauncher_admin_localize',
			array(
				'ajax_url'     => admin_url('admin-ajax.php'),
				'nonce'        => wp_create_nonce('saaslauncher_admin_nonce'),
				'welcomeNonce' => wp_create_nonce('saaslauncher_welcome_nonce'),
				'redirect_url' => admin_url('themes.php?page=about-saaslauncher'),
				'scrollURL'    => admin_url('plugins.php?cozy-addons-scroll=true'),
				'demoURL'      => admin_url('themes.php?page=advanced-import'),
			)
		);
	}
}
add_action('admin_enqueue_scripts', 'saaslauncher_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function saaslauncher_block_assets()
{
	wp_enqueue_style('saaslauncher-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'saaslauncher_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (! function_exists('saaslauncher_excerpt_more_postfix')) {
	function saaslauncher_excerpt_more_postfix($more)
	{
		if (is_admin()) {
			return $more;
		}
		return '...';
	}
	add_filter('excerpt_more', 'saaslauncher_excerpt_more_postfix');
}
function saaslauncher_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'saaslauncher_add_woocommerce_support');

function wreckingball_fonts() {
    wp_enqueue_style('wreckingball-fonts', 'https://fonts.googleapis.com/css?family=Orbitron:700,900|Montserrat:400,600&display=swap', false);
}
add_action('wp_enqueue_scripts', 'wreckingball_fonts');
