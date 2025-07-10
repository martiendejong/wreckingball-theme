<ul class="saaslauncher-page__recommended-plugins">
	<div class="recommended-plugins-note">
		<h3><?php esc_html_e( 'Recommended Plugins for Smooth Functionality', 'saaslauncher' ); ?></h3>
		<p><?php esc_html_e( 'To get the most out of your experience with SaasLauncher, we highly recommend the following plugins. These plugins are carefully selected to complement and extend the features of SaasLauncher, offering you a seamless and powerful integration.', 'saaslauncher' ); ?></p>
		<p><?php esc_html_e( 'Each plugin is tested for compatibility, so you can be sure they will work smoothly with your setup.', 'saaslauncher' ); ?></p>
		<p><strong><?php esc_html_e( 'Note:', 'saaslauncher' ); ?></strong> <?php esc_html_e( 'Always ensure you are using the latest versions of the plugins for optimal performance and security. If you need assistance with any of the recommended plugins, our support team is here to help.', 'saaslauncher' ); ?></p>
	</div>

	<?php
	// Define an array of plugins.
	$recommended_plugins = array(
		array(
			'slug'     => 'cozy-addons',
			'filename' => 'cozy-addons/cozy-addons.php',
			'name'     => 'Cozy Blocks',
			'desc'     => 'Essential for enabling PRO version & features and required by demos for block functionalities.',
			'icon_url' => 'https://plugins.svn.wordpress.org/cozy-addons/assets/icon-128x128.gif',
		),
		array(
			'slug'     => 'cozy-essential-addons',
			'filename' => 'cozy-essential-addons/cozy-essential-addons.php',
			'name'     => 'Cozy Essential Addons',
			'desc'     => 'Provides demo content and essential features needed to access demo files.',
			'icon_url' => 'https://plugins.svn.wordpress.org/cozy-essential-addons/assets/icon-128x128.png',
		),
		array(
			'slug'     => 'advanced-import',
			'filename' => 'advanced-import/advanced-import.php',
			'name'     => 'Advanced Import',
			'desc'     => 'Facilitates importing demo content into your WordPress site.',
			'icon_url' => 'https://plugins.svn.wordpress.org/advanced-import/assets/icon-128x128.png',
		),

	);

	// Function to render plugin item.
	function render_plugin_item( $recommended_plugin ) {
		$slug     = isset( $recommended_plugin['slug'] ) ? sanitize_key( $recommended_plugin['slug'] ) : '';
		$filename = isset( $recommended_plugin['filename'] ) ? sanitize_text_field( $recommended_plugin['filename'] ) : '';
		$name     = isset( $recommended_plugin['name'] ) ? sanitize_text_field( $recommended_plugin['name'] ) : '';
		$desc     = isset( $recommended_plugin['desc'] ) ? sanitize_text_field( $recommended_plugin['desc'] ) : '';
		$icon_url = isset( $recommended_plugin['icon_url'] ) ? esc_url( $recommended_plugin['icon_url'] ) : '';

		$classes = array( 'recommended-plugins' );
		if ( saaslauncher_is_plugin_activated( $filename ) ) {
			$classes[] = 'active';
		}
		?>
		<li class="<?php echo implode( ' ', array_map( 'sanitize_html_class', array_filter( $classes ) ) ); ?>">
			<figure class="plugin-image">
				<img src="<?php echo esc_url( $icon_url ); ?>" alt="
									<?php
										printf(
										/* Translated String %s: Plugin name */
											esc_html__( '%s', 'saaslauncher' ),
											esc_html( $name )
										);
									?>
					" loading="lazy" />
			</figure>
			<div class="plugin-details">
				<h4 class="plugin-name">
				<?php
					printf(
					/* Translated String %s: Plugin name */
						esc_html__( '%s', 'saaslauncher' ),
						esc_html( $name )
					);
				?>
				</h4>
				<p class="plugin-desc">
					<?php
					printf(
					/* Translated String %s: Plugin description */
						esc_html__( '%s', 'saaslauncher' ),
						esc_html( $desc )
					);
					?>
				</p>
				<?php
				if ( saaslauncher_is_plugin_activated( $filename ) ) {
					?>
					<a class="plugin-button plugin-activated"><?php esc_html_e( 'Activated', 'saaslauncher' ); ?></a>
					<?php
				} elseif ( saaslauncher_is_plugin_installed( $filename ) ) {
					?>
					<a href="<?php echo esc_url( get_admin_url() . 'plugins.php?action=activate&plugin=' . rawurlencode( $slug ) ); ?>" class="plugin-button plugin-activate" data-name="<?php echo esc_html( $name ); ?>" data-slug="<?php echo esc_html( $slug ); ?>" data-filename="<?php echo esc_html( $filename ); ?>"><?php esc_html_e( 'Activate', 'saaslauncher' ); ?></a>
					<?php
				} else {
					?>
					<a href="<?php echo esc_url( get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=' . rawurlencode( $slug ) . '&TB_iframe=true&width=600&height=550' ); ?>" class="plugin-button plugin-install-activate" data-name="<?php echo esc_html( $name ); ?>" data-slug="<?php echo esc_html( $slug ); ?>" data-filename="<?php echo esc_html( $filename ); ?>"><?php esc_html_e( 'Install & Activate', 'saaslauncher' ); ?></a>
					<?php
				}
				?>
			</div>
		</li>
		<?php
	}

	$has_all_recommended_plugins = true;

	// Loop through the plugins and render each one.
	foreach ( $recommended_plugins as $recommended_plugin ) {
		render_plugin_item( $recommended_plugin );

		if ( ! is_plugin_active( $recommended_plugin['filename'] ) ) {
			$has_all_recommended_plugins = false;
		}
	}

	$classes   = array();
	$classes[] = ! $has_all_recommended_plugins ? 'saaslauncher-recommend-plugins__installer' : '';

	$button_label = 'Woo-hoo! Plugins activated and ready to go! 🎉';

	if ( ! $has_all_recommended_plugins ) {
		$button_label = 'Install and/or Activate All Plugins';
	}
	?>

	<a id="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_filter( $classes ) ) ) ); ?>" class="admin-button info-button button button-primary" <?php echo $has_all_recommended_plugins ? esc_attr( 'disabled' ) : ''; ?>>
		<?php
		printf(
		/* Translated string %s: Button label */
			esc_html__( '%s', 'saaslauncher' ),
			esc_html( $button_label )
		);
		?>
	</a>
</ul>
<?php