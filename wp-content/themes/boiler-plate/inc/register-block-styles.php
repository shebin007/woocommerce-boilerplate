<?php
/**
 * Block styles.
 *
 * @package boiler-plate
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function boiler_plate_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'boiler-plate-sticky',
			'label' => __( 'Sticky header', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'boiler-plate-flat-button',
			'label' => __( 'Flat button', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'boiler-plate-button-shadow',
			'label' => __( 'Button with shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'boiler-plate-navigation-button',
			'label' => __( 'Button style', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'boiler-plate-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'boiler-plate-list-underline',
			'label' => __( 'Underlined list items', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'boiler-plate-box-shadow',
			'label' => __( 'Box shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'boiler-plate-box-shadow',
			'label' => __( 'Box shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'boiler-plate-box-shadow',
			'label' => __( 'Box shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'boiler-plate-text-shadow',
			'label' => __( 'Text shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'boiler-plate-text-shadow',
			'label' => __( 'Text shadow', 'boiler-plate' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'boiler-plate-text-shadow',
			'label' => __( 'Text shadow', 'boiler-plate' ),
		)
	);
}
add_action( 'init', 'boiler_plate_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function boiler_plate_unregister_block_style() {
	wp_enqueue_script(
		'boiler-plate-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BOILER_PLATE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'boiler_plate_unregister_block_style' );
