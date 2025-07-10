<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (! function_exists('saaslauncher_is_plugin_installed')) {
	function saaslauncher_is_plugin_installed($plugin_slug)
	{
		$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
		return file_exists($plugin_path);
	}
}
if (! function_exists('saaslauncher_is_plugin_activated')) {
	function saaslauncher_is_plugin_activated($plugin_slug)
	{
		return is_plugin_active($plugin_slug);
	}
}
if (! function_exists('saaslauncher_welcome_notice')) :
	function saaslauncher_welcome_notice()
	{
		if (get_option('saaslauncher_dismissed_custom_notice')) {
			return;
		}
		global $pagenow;
		$current_screen = get_current_screen();

		if (is_admin()) {
			if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
				return;
			}
			if (is_network_admin()) {
				return;
			}
			if (! current_user_can('manage_options')) {
				return;
			}
			$theme = wp_get_theme();

			if (is_child_theme()) {
				$theme = wp_get_theme()->parent();
			}
			$saaslauncher_version = $theme->get('Version');

?>
			<div class="saaslauncher-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="saaslauncher-dismiss-notice">
				<div class="info-content">
					<div class="notice-holder">
						<h5><span class="theme-name"><span><?php esc_html_e('Welcome to SaasLauncher', 'saaslauncher'); ?></span></h5>
						<h2><?php esc_html_e('Start building your website with the most advanced WordPress theme ever! 🚀 ', 'saaslauncher'); ?></h2>
						</h3>
						<div class="notice-text">
							<p><?php esc_html_e('Please install and activate all recommended plugins to use 50+ advanced blocks, 70+ pre-builts sections, 50+ pre-built starter site demos with one click demo importer. Enhance website building and launch your site within minutes with just a few clicks! - Cozy Blocks, Cozy Essential Addons, Advanced Import.', 'saaslauncher'); ?></p>
						</div>
						<a href="#" id="install-activate-button" class="button admin-button info-button"><?php esc_html_e('Getting started with a single click', 'saaslauncher'); ?></a>
						<a href="<?php echo admin_url(); ?>themes.php?page=about-saaslauncher" class="button admin-button info-button"><?php esc_html_e('Explore SaasLauncher', 'saaslauncher'); ?></a>

					</div>
				</div>
				<div class="theme-hero-screens">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/theme_screen_img.png'); ?>" />
				</div>

			</div>
<?php
		}
	}
endif;
add_action('admin_notices', 'saaslauncher_welcome_notice');
function saaslauncher_dismissble_notice()
{
	if (! isset($_POST['nonce']) || ! wp_verify_nonce($_POST['nonce'], 'saaslauncher_admin_nonce')) {
		wp_send_json_error(array('message' => 'Nonce verification failed.'));
		return;
	}

	$result = update_option('saaslauncher_dismissed_custom_notice', 1);

	if ($result) {
		wp_send_json_success();
	} else {
		wp_send_json_error(array('message' => 'Failed to update option'));
	}
}
add_action('wp_ajax_saaslauncher_dismissble_notice', 'saaslauncher_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_saaslauncher_install_and_activate_plugins', 'saaslauncher_install_and_activate_plugins');
add_action('wp_ajax_nopriv_saaslauncher_install_and_activate_plugins', 'saaslauncher_install_and_activate_plugins');
add_action('wp_ajax_saaslauncher_rplugin_activation', 'saaslauncher_rplugin_activation');
add_action('wp_ajax_nopriv_saaslauncher_rplugin_activation', 'saaslauncher_rplugin_activation');

function check_plugin_installed_status($pugin_slug, $plugin_file)
{
	return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */
function check_plugin_active_status($pugin_slug, $plugin_file)
{
	return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/misc.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
function saaslauncher_install_and_activate_plugins()
{
	if (! current_user_can('manage_options')) {
		return;
	}
	check_ajax_referer('saaslauncher_welcome_nonce', 'nonce');
	// Define the plugins to be installed and activated
	$recommended_plugins = array(
		array(
			'slug' => 'cozy-addons',
			'file' => 'cozy-addons.php',
			'name' => __('Cozy Blocks', 'saaslauncher'),
		),
		array(
			'slug' => 'advanced-import',
			'file' => 'advanced-import.php',
			'name' => __('Advanced Import', 'saaslauncher'),
		),
		array(
			'slug' => 'cozy-essential-addons',
			'file' => 'cozy-essential-addons.php',
			'name' => __('Cozy Essential Addons', 'saaslauncher'),
		),
		// Add more plugins here as needed
	);

	// Include the necessary WordPress functions

	// Set up a transient to store the installation progress
	set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

	// Loop through each plugin
	foreach ($recommended_plugins as $plugin) {
		$plugin_slug = $plugin['slug'];
		$plugin_file = $plugin['file'];
		$plugin_name = $plugin['name'];

		// Check if the plugin is active
		if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Already Active');
			continue; // Skip to the next plugin
		}

		// Check if the plugin is installed but not active
		if (is_saaslauncher_plugin_installed($plugin_slug . '/' . $plugin_file)) {
			$activate = activate_plugin($plugin_slug . '/' . $plugin_file);
			if (is_wp_error($activate)) {
				saaslauncher_update_install_and_activate_progress($plugin_name, 'Error');
				continue; // Skip to the next plugin
			}
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Activated');
			continue; // Skip to the next plugin
		}

		// Plugin is not installed or activated, proceed with installation
		saaslauncher_update_install_and_activate_progress($plugin_name, 'Installing');

		// Fetch plugin information
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => $plugin_slug,
				'fields' => array('sections' => false),
			)
		);

		// Check if plugin information is fetched successfully
		if (is_wp_error($api)) {
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Error');
			continue; // Skip to the next plugin
		}

		// Set up the plugin upgrader
		$upgrader = new Plugin_Upgrader();
		$install  = $upgrader->install($api->download_link);

		// Check if installation is successful
		if ($install) {
			// Activate the plugin
			$activate = activate_plugin($plugin_slug . '/' . $plugin_file);

			// Check if activation is successful
			if (is_wp_error($activate)) {
				saaslauncher_update_install_and_activate_progress($plugin_name, 'Error');
				continue; // Skip to the next plugin
			}
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Activated');
		} else {
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Error');
		}
	}

	// Delete the progress transient
	$redirect_url = admin_url('themes.php?page=advanced-import');

	// Delete the progress transient
	delete_transient('install_and_activate_progress');
	// Return JSON response
	wp_send_json_success(array('redirect_url' => $redirect_url));
}

/**
 * Checks if a specific plugin is installed.
 *
 * This function checks if a plugin, identified by its slug, is installed and available
 * in the WordPress plugin directory. It retrieves the list of all installed plugins
 * and checks if the plugin with the given slug exists.
 *
 * @param string $plugin_slug The slug of the plugin to check.
 *
 * @return bool True if the plugin is installed, false otherwise.
 *
 * @uses get_plugins() Retrieves the list of installed plugins.
 */
function is_saaslauncher_plugin_installed($plugin_slug)
{
	$plugins = get_plugins();
	return isset($plugins[$plugin_slug]);
}

/**
 * Updates the progress of plugin installation and activation.
 *
 * This function updates the progress of a plugin installation or activation by
 * adding the plugin name and its status to a transient. The progress data is
 * stored temporarily and can be retrieved later to show the installation/activation
 * progress of multiple plugins.
 *
 * The progress data is stored as an array of plugin names with their respective statuses
 * (e.g., "Activated", "Error") and is saved in a transient for a limited period (10 minutes).
 *
 * @param string $plugin_name The name of the plugin being installed or activated.
 * @param string $status      The status of the plugin installation or activation (e.g., "Activated", "Error").
 *
 * @return void
 *
 * @uses get_transient() Retrieves the current progress stored in a transient.
 * @uses set_transient() Saves the updated progress back into the transient.
 */
function saaslauncher_update_install_and_activate_progress($plugin_name, $status)
{
	$progress   = get_transient('install_and_activate_progress');
	$progress[] = array(
		'plugin' => $plugin_name,
		'status' => $status,
	);
	set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}

/**
 * Adds a custom menu item to the WordPress theme dashboard.
 *
 * This function creates a menu item under the "Appearance" section in the WordPress admin
 * dashboard. The menu item links to a page titled "About SaasLauncher," where additional
 * information about the SaasLauncher theme or plugin is displayed.
 *
 * The menu item is only accessible to users with the capability `edit_theme_options`,
 * typically administrators or users with higher permissions.
 *
 * @return void
 *
 * @uses add_theme_page() Adds a new page to the "Appearance" menu in the admin dashboard.
 * @uses saaslauncher_theme_info_display() Displays the content for the "About SaasLauncher" page.
 */
function saaslauncher_dashboard_menu()
{
	add_theme_page(esc_html__('About SaasLauncher', 'saaslauncher'), esc_html__('About SaasLauncher', 'saaslauncher'), 'edit_theme_options', 'about-saaslauncher', 'saaslauncher_theme_info_display');
}
add_action('admin_menu', 'saaslauncher_dashboard_menu');
/**
 * Displays theme information by including the dashboard template.
 *
 * This function is used to display theme-related information by including the
 * `dashboard.php` file from the theme's `inc/admin` directory. It is typically
 * invoked in the admin dashboard or a settings page to show relevant theme details.
 *
 * @return void
 *
 * @uses require_once() Includes the 'dashboard.php' file to display theme information.
 */
function saaslauncher_theme_info_display()
{
	// Dashboard.
	require_once SAASLAUNCHER_DIR . 'inc/admin/dashboard.php';
}

/**
 * Handles the activation of a plugin via an AJAX request.
 *
 * This function processes an AJAX request to activate a plugin. It checks for required
 * parameters (plugin slug, filename, and name) and activates the specified plugin.
 * If the activation is successful, it updates the installation and activation progress.
 * If an error occurs during the activation, it logs the error and returns a failure response.
 *
 * The function uses a nonce (`saaslauncher_admin_nonce`) to ensure the request is valid
 * and comes from an authorized source.
 *
 * @return void
 *
 * @uses check_ajax_referer() Ensures the request is valid by checking the nonce.
 * @uses activate_plugin() Attempts to activate the plugin using its filename.
 * @uses saaslauncher_update_install_and_activate_progress() Updates the installation and activation progress.
 * @uses wp_send_json_success() Sends a success response in JSON format.
 * @uses wp_send_json_error() Sends an error response in JSON format.
 */
function saaslauncher_rplugin_activation()
{
	check_ajax_referer('saaslauncher_admin_nonce', 'nonce', true);

	if (isset($_POST['pluginSlug'], $_POST['pluginFilename'], $_POST['pluginName'])) {
		$plugin_slug     = sanitize_text_field(wp_unslash($_POST['pluginSlug']));
		$plugin_filename = sanitize_text_field(wp_unslash($_POST['pluginFilename']));
		$plugin_name     = sanitize_text_field(wp_unslash($_POST['pluginName']));

		$activate = activate_plugin($plugin_filename);

		if (is_wp_error($activate)) {
			saaslauncher_update_install_and_activate_progress($plugin_name, 'Error');
		}

		saaslauncher_update_install_and_activate_progress($plugin_name, 'Activated');

		wp_send_json_success();
	} else {
		wp_send_json_error('Error: Missing parameters.');
	}
}
