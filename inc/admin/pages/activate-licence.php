<div class="saaslauncher-page__activate-licence">
	<?php
	if ( ! saaslauncher_get_premium_status() ) :
		?>
		<h3><?php esc_html_e( 'Got a licence key?', 'saaslauncher' ); ?> 🔑</h3>

	<?php endif; ?>

	<?php
	// Installer & Activator.
	if ( ! saaslauncher_is_plugin_installed( 'cozy-addons' ) ) {
		?>
		<a href="<?php echo esc_attr( get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550' ); ?>" class="plugin-button plugin-install-activate" data-name="Cozy Blocks" data-slug="cozy-addons" data-filename="cozy-addons/cozy-addons.php"><?php esc_html_e( 'Install & Activate Cozy Blocks!', 'saaslauncher' ); ?></a>
		<?php
	} elseif ( ! saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
		?>
		<a href="<?php echo esc_attr( get_admin_url() . 'plugins.php?action=activate&plugin=cozy-addons' ); ?>" class="plugin-button plugin-activate" data-name="Cozy Blocks" data-slug="cozy-addons" data-filename="cozy-addons/cozy-addons.php"><?php esc_html_e( 'Activate Cozy Blocks!', 'saaslauncher' ); ?></a>
		<?php
	}

	if ( saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) && ! saaslauncher_get_premium_status() ) :
		global $submenu;

		$has_fs_account_approved = false;

		foreach ( $submenu['_cozy_companions'] as $cozy_addons_submenu ) {
			if ( isset( $cozy_addons_submenu[2] ) && '_cozy_companions-account' === $cozy_addons_submenu[2] ) {
				$has_fs_account_approved = true;
				break;
			}
		}

		$classes   = array();
		$classes[] = 'licence-activator';
		$classes[] = ! $has_fs_account_approved ? 'account-unavailable' : '';

		$redirection_url = get_admin_url() . 'admin.php?page=_cozy_companions-account';

		if ( ! $has_fs_account_approved ) {
			$redirection_url = '#';
		}

		?>
		<a class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_filter( $classes ) ) ) ); ?>" href="<?php echo esc_url( $redirection_url ); ?>"><?php esc_html_e( 'Activate Licence', 'saaslauncher' ); ?></a>
		<?php
	endif;

	// Video tutorial.
	if ( ! saaslauncher_is_plugin_installed( 'cozy-addons' ) || ! saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) || ! saaslauncher_get_premium_status() ) :
		?>
		<div class="guideline-video">
			<h3><?php esc_html_e( 'Guide to activating the PRO version.', 'saaslauncher' ); ?></h3>
			<div class="video-wrapper">
				<iframe width="620" height="380" src="https://www.youtube.com/embed/GP4NxSbikS4" title="<?php esc_attr_e( 'How to Install and Activate Cozy Blocks for WordPress', 'saaslauncher' ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			</div>
		</div>
		<?php
	endif;


	if ( saaslauncher_get_premium_status() ) :
		?>
		<p class="pro-unlocked-message">
			<?php esc_html_e( '🎉 Woohoo! PRO version unlocked. You\'re ready to build! 🚀', 'saaslauncher' ); ?>
		</p>
		<?php
	endif;
	?>
</div>
<?php
