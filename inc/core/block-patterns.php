<?php

/**
 * saaslauncher: Block Patterns
 *
 * @since saaslauncher 1.0.0
 */

/**
 * Registers pattern categories for saaslauncher
 *
 * @since saaslauncher 1.0.0
 *
 * @return void
 */
function saaslauncher_register_pattern_category()
{
	$block_pattern_categories = array(
		'saaslauncher' => array('label' => __('SaasLauncher Extra', 'saaslauncher')),
		'saaslauncher-homes' => array('label' => __('Homepage Templates', 'saaslauncher')),
		'saaslauncher-pages' => array('label' => __('Page Templates', 'saaslauncher')),
		'saaslauncher-blogs' => array('label' => __('Blog Templates', 'saaslauncher')),
		'saaslauncher-hero' => array('label' => __('Hero', 'saaslauncher')),
		'saaslauncher-about' => array('label' => __('About / Content Blocks', 'saaslauncher')),
		'saaslauncher-service' => array('label' => __('Features/Services', 'saaslauncher')),
		'saaslauncher-team' => array('label' => __('Teams', 'saaslauncher')),
		'saaslauncher-testimonial' => array('label' => __('Testimonials', 'saaslauncher')),
		'saaslauncher-faqs' => array('label' => __('FAQs', 'saaslauncher')),
		'saaslauncher-number' => array('label' => __('Numbers/Counter', 'saaslauncher')),
		'saaslauncher-contact' => array('label' => __('Contacts', 'saaslauncher')),
		'saaslauncher-cta' => array('label' => __('Call To Action', 'saaslauncher')),
		'saaslauncher-pricing' => array('label' => __('Pricing Tables', 'saaslauncher')),
		'saaslauncher-gallery' => array('label' => __('Portfolio/Gallery', 'saaslauncher')),
		'saaslauncher-logos' => array('label' => __('Logo Showcase', 'saaslauncher')),
		'saaslauncher-post' => array('label' => __('Posts & Blogs', 'saaslauncher')),
	);

	$block_pattern_categories = apply_filters('saaslauncher_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'saaslauncher_register_pattern_category', 9);
