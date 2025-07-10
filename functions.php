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

/**
 * Add Customizer support for Wreckingball AI theme
 */
function wreckingball_customize_register($wp_customize) {
    
    // Add Wreckingball AI section
    $wp_customize->add_section('wreckingball_hero', array(
        'title' => __('Wreckingball AI Hero', 'saaslauncher'),
        'priority' => 30,
        'description' => __('Customize the homepage hero section', 'saaslauncher'),
    ));
    
    // Hero Image Setting
    $wp_customize->add_setting('wreckingball_hero_image', array(
        'default' => get_template_directory_uri() . '/assets/images/hero_wreckingball.png',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    // Hero Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wreckingball_hero_image', array(
        'label' => __('Hero Image', 'saaslauncher'),
        'description' => __('Upload or choose the hero image for the homepage', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'settings' => 'wreckingball_hero_image',
        'priority' => 10,
    )));
    
    // Hero Title Setting
    $wp_customize->add_setting('wreckingball_hero_title', array(
        'default' => 'Smash Through Bottlenecks with AI. Work Smarter. No Limits.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    // Hero Title Control
    $wp_customize->add_control('wreckingball_hero_title', array(
        'label' => __('Hero Title', 'saaslauncher'),
        'description' => __('Enter the main hero title (use <span> tags for colored text)', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'textarea',
        'priority' => 20,
    ));
    
    // Hero Subtitle Setting
    $wp_customize->add_setting('wreckingball_hero_subtitle', array(
        'default' => 'Wreckingball AI is your digital wrecking ball: break free from old business, automate everything, and accelerate with seamless, bold AI integration.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));
    
    // Hero Subtitle Control
    $wp_customize->add_control('wreckingball_hero_subtitle', array(
        'label' => __('Hero Subtitle', 'saaslauncher'),
        'description' => __('Enter the hero subtitle text', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'textarea',
        'priority' => 30,
    ));
    
    // Primary CTA Text Setting
    $wp_customize->add_setting('wreckingball_hero_cta_primary', array(
        'default' => 'See Wreckingball AI in Action',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    // Primary CTA Text Control
    $wp_customize->add_control('wreckingball_hero_cta_primary', array(
        'label' => __('Primary CTA Text', 'saaslauncher'),
        'description' => __('Enter the text for the primary call-to-action button', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'text',
        'priority' => 40,
    ));
    
    // Primary CTA URL Setting
    $wp_customize->add_setting('wreckingball_hero_cta_primary_url', array(
        'default' => '#demo',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    // Primary CTA URL Control
    $wp_customize->add_control('wreckingball_hero_cta_primary_url', array(
        'label' => __('Primary CTA URL', 'saaslauncher'),
        'description' => __('Enter the URL for the primary call-to-action button', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'url',
        'priority' => 50,
    ));
    
    // Secondary CTA Text Setting
    $wp_customize->add_setting('wreckingball_hero_cta_secondary', array(
        'default' => 'Book a Demo',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    // Secondary CTA Text Control
    $wp_customize->add_control('wreckingball_hero_cta_secondary', array(
        'label' => __('Secondary CTA Text', 'saaslauncher'),
        'description' => __('Enter the text for the secondary call-to-action button', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'text',
        'priority' => 60,
    ));
    
    // Secondary CTA URL Setting
    $wp_customize->add_setting('wreckingball_hero_cta_secondary_url', array(
        'default' => '#contact',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    // Secondary CTA URL Control
    $wp_customize->add_control('wreckingball_hero_cta_secondary_url', array(
        'label' => __('Secondary CTA URL', 'saaslauncher'),
        'description' => __('Enter the URL for the secondary call-to-action button', 'saaslauncher'),
        'section' => 'wreckingball_hero',
        'type' => 'url',
        'priority' => 70,
    ));
}
add_action('customize_register', 'wreckingball_customize_register');

/**
 * Helper function to get hero image URL with fallback
 */
function wreckingball_get_hero_image() {
    $hero_image = get_theme_mod('wreckingball_hero_image');
    if (empty($hero_image)) {
        $hero_image = get_template_directory_uri() . '/assets/images/hero_wreckingball.png';
    }
    return $hero_image;
}

/**
 * Shortcode for Wreckingball AI Hero Section
 */
function wreckingball_hero_shortcode($atts) {
    // Get customizer values with fallbacks
    $hero_image = get_theme_mod('wreckingball_hero_image', get_template_directory_uri() . '/assets/images/hero_wreckingball.png');
    $hero_title = get_theme_mod('wreckingball_hero_title', 'Smash Through Bottlenecks with <span style="color:#00FFF7;text-shadow:0 0 16px #00FFF7;">AI</span>.<br>Work Smarter.<br><span style="font-size:2rem;font-weight:400;color:#ffe942;text-shadow:0 0 8px #ffe942;">No Limits.</span>');
    $hero_subtitle = get_theme_mod('wreckingball_hero_subtitle', 'Wreckingball AI is your digital wrecking ball: break free from old business, automate everything, and accelerate with seamless, bold AI integration.');
    $cta_primary_text = get_theme_mod('wreckingball_hero_cta_primary', 'See Wreckingball AI in Action');
    $cta_primary_url = get_theme_mod('wreckingball_hero_cta_primary_url', '#demo');
    $cta_secondary_text = get_theme_mod('wreckingball_hero_cta_secondary', 'Book a Demo');
    $cta_secondary_url = get_theme_mod('wreckingball_hero_cta_secondary_url', '#contact');
    
    ob_start();
    ?>
    <div class="wp-block-group alignfull" style="background: linear-gradient(120deg, #9B30FF 0%, #00FFF7 100%); margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;">
      <div style="background:rgba(20,20,20,0.98);border-radius:0 0 32px 32px;box-shadow:0 0 64px #9B30FF44,0 0 32px #00FFF744;padding:80px 0 80px 0;max-width:1180px;margin:0 auto;">
        <div style="display:flex;align-items:center;justify-content:space-between;gap:48px;max-width:1100px;margin:0 auto;padding:0 40px;">
          <!-- Left side: Hero Image -->
          <div style="flex:0 0 25%;display:flex;justify-content:center;align-items:center;">
            <img src="<?php echo esc_url($hero_image); ?>" alt="Wreckingball AI Hero" style="width:100%;max-width:240px;border-radius:24px;box-shadow:0 0 64px #9B30FF,0 0 32px #00FFF7,0 0 8px #ffe942;filter:drop-shadow(0 0 32px #00FFF7) drop-shadow(0 0 16px #9B30FF);background:#191919;" />
          </div>
          
          <!-- Right side: Text Content (Centered) -->
          <div style="flex:0 0 70%;display:flex;flex-direction:column;align-items:center;justify-content:center;">
            <h1 style="font-family:'Orbitron','Montserrat',Arial,sans-serif;font-size:4rem;font-weight:900;color:#fff;text-align:center;text-shadow:0 0 24px #9B30FF,0 0 8px #00FFF7;letter-spacing:2px;line-height:1.1;max-width:900px;margin:0 0 32px 0;">
              <?php echo wp_kses_post($hero_title); ?>
            </h1>
            <p style="font-family:'Montserrat',Arial,sans-serif;font-size:1.5rem;color:#eaecef;text-align:center;max-width:700px;margin:0 0 48px 0;line-height:1.5;">
              <?php echo esc_html($hero_subtitle); ?>
            </p>
            <div style="display:flex;gap:24px;flex-wrap:wrap;justify-content:center;">
              <a href="<?php echo esc_url($cta_primary_url); ?>" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);color:#141414;font-family:'Orbitron',Arial,sans-serif;font-size:1.25rem;font-weight:700;padding:20px 48px;border-radius:32px;box-shadow:0 0 16px #9B30FF88,0 0 8px #00FFF788;text-decoration:none;transition:all 0.2s;display:inline-block;"><?php echo esc_html($cta_primary_text); ?></a>
              <a href="<?php echo esc_url($cta_secondary_url); ?>" style="background:linear-gradient(90deg,#00FFF7 0%,#9B30FF 100%);color:#fff;font-family:'Montserrat',Arial,sans-serif;font-size:1.25rem;font-weight:700;padding:20px 48px;border-radius:32px;box-shadow:0 0 16px #00FFF788,0 0 8px #9B30FF88;text-decoration:none;transition:all 0.2s;display:inline-block;"><?php echo esc_html($cta_secondary_text); ?></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Neon gradient divider -->
      <div class="section-break" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);height:6px;margin:48px auto 0 auto;border-radius:6px;max-width:600px;"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('wreckingball_hero', 'wreckingball_hero_shortcode');
