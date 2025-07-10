<?php
function saaslauncher_get_premium_status() {
	$premium_status = false;
	if ( class_exists( 'PatternBerg' ) || class_exists( 'Cozy_Addons' ) ) {
		if ( cc_fs()->is__premium_only() && cc_fs()->can_use_premium_code() ) {
			$premium_status = true;
		}
	}

	return $premium_status;
}

function saaslauncher_get_theme_initial( $name ) {
	// Split the name into words.
	$words = explode( ' ', $name );

	// Use array_slice to take the first letters of each word.
	$initials = '';
	foreach ( array_slice( $words, 0 ) as $word ) {
		if ( ! empty( $word ) ) {
			$initials .= strtoupper( $word[0] );
		}
	}

	return $initials;
}

function saaslauncher_get_dashboard_pages_order(): array {
	$pages_dir = SAASLAUNCHER_DIR . 'inc/admin/pages';

	// Fetch all PHP files in the /pages directory.
	$pages = glob( $pages_dir . '/*.php' );

	// Define your custom order by file names.
	$custom_order = array(
		'getting-started.php',
		'recommended-plugins.php',
		'setup-instructions.php',
		'free-vs-pro.php',
		'pre-built-demos.php',
		'support.php',
		'activate-licence.php',
		'changelog.php',
	);

	// Sort the fetched pages based on custom order
	usort(
		$pages,
		function ( $a, $b ) use ( $custom_order ) {
			$a_basename = basename( $a );
			$b_basename = basename( $b );

			$a_index = array_search( $a_basename, $custom_order, true );
			$b_index = array_search( $b_basename, $custom_order, true );

			return $a_index - $b_index;
		}
	);

	return $pages;
}

$theme_name    = wp_get_theme()->get( 'Name' );
$theme_version = wp_get_theme()->get( 'Version' );
$theme_initial = saaslauncher_get_theme_initial( $theme_name );

$pages_order = saaslauncher_get_dashboard_pages_order();
// Define custom labels for specific files.
$custom_page_labels = array(
	'pre-built-demos.php' => 'Pre-Built Demos',
);

?>
<div class="dashboard-about-saaslauncher">
	<div class="saaslauncher-about-header">
		<p id="saaslauncher-initial">
			<?php
			printf(
				/* translators: %s: Theme initial */
				esc_html__( '%s', 'saaslauncher' ),
				esc_html( $theme_initial )
			);
			?>
		</p>

		<h2 id="saaslauncher-name">
			<?php
			printf(
				/* translators: %s: Theme name */
				esc_html__( '%s', 'saaslauncher' ),
				esc_html( $theme_name )
			);
			?>
		</h2>

		<p id="saaslauncher-version">
			<?php
			esc_html_e( 'Version ', 'saaslauncher' );
			echo esc_html( $theme_version );

			if ( saaslauncher_get_premium_status() ) :
				?>
			<svg id="saaslauncher-premium-crown" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_908_10)">
					<path d="M1.43292 13.6044H14.7663V14.9377H1.43292V13.6044ZM1.43292 4.27106L4.76626 6.60439L8.09959 2.27106L11.4329 6.60439L14.7663 4.27106V12.2711H1.43292V4.27106ZM2.76626 6.83172V10.9377H13.4329V6.83172L11.1529 8.42772L8.09959 4.45772L5.04626 8.42772L2.76626 6.83172Z" fill="#FF9900" />
				</g>
				<defs>
					<clipPath id="clip0_908_10">
						<rect width="16" height="16" fill="white" transform="translate(0.0996094 0.937714)" />
					</clipPath>
				</defs>
			</svg>

				<?php
			endif;
			?>
		</p>
	</div>

	<div class="saaslauncher-about-body">
		<ul id="saaslauncher-tabs">
			<?php
			foreach ( $pages_order as $key => $dashboard_page ) {
				$filename = basename( $dashboard_page );

				$label = '';

				// Check if a custom label exists, otherwise generate a label from the filename.
				if ( isset( $custom_page_labels[ $filename ] ) ) {
					$label = $custom_page_labels[ $filename ];
				} else {
					// Create a label by converting filename to a title (e.g., "about-us.php" -> "About Us").
					$label = ucwords( str_replace( array( '-', '_' ), ' ', pathinfo( $filename, PATHINFO_FILENAME ) ) );
				}

				$classes   = array();
				$classes[] = 'saaslauncher-tabs-item';
				$classes[] = 0 === $key ? 'active' : '';
				?>
				<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_filter( $classes ) ) ) ); ?>" data-index="<?php echo esc_html( sanitize_key( $key ) ); ?>">
					<?php
					printf(
						/* translators: %s: Page label. */
						esc_html__( '%s', 'saaslauncher' ),
						esc_html( sanitize_text_field( wp_unslash( $label ) ) )
					);
					?>
				</li>
				<?php
			}
			?>
		</ul>
		<div id="saaslauncher-content">
			<?php
			foreach ( $pages_order as $key => $dashboard_page ) {
				$filename  = basename( $dashboard_page );
				$pages_dir = SAASLAUNCHER_DIR . 'inc/admin/pages/';

				$file_path = $pages_dir . $filename;

				// Check if the file exists and is readable.
				if ( file_exists( $file_path ) && is_readable( $file_path ) ) {
					$classes   = array();
					$classes[] = 'saaslauncher-content-item';
					$classes[] = 0 === $key ? 'active' : '';
					?>
					<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_filter( $classes ) ) ) ); ?>" data-index="<?php echo esc_html( sanitize_key( $key ) ); ?>">
						<?php
						// Start output buffering.
						ob_start();

						// Include the file (it will execute and its output will be captured).
						include $file_path;

						// Get the buffered output and clean the buffer.
						echo ob_get_clean();
						?>
					</div>
					<?php

				} else {
					echo esc_html__( 'File does not exist or is not readable.', 'saaslauncher' );
				}
			}
			?>
		</div>
	</div>
</div>
<?php
