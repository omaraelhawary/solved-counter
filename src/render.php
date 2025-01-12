<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Generates a unique id for aria-controls.
$unique_id = wp_unique_id( 'p-' );

wp_interactivity_state('create-block', array(
	'solvedCount' => 0,
));

// Adds the global state.
wp_interactivity_state(
	'create-block',
	array(
		'isDark'    => false,
		'darkText'  => esc_html__( 'Switch to Light', 'solved-counter' ),
		'lightText' => esc_html__( 'Switch to Dark', 'solved-counter' ),
		'themeText'	=> esc_html__( 'Switch to Dark', 'solved-counter' ),
	)
);
?>

<div data-wp-interactive="create-block">
	<p>Questions Solved: <strong><span data-wp-text="state.solvedCount"></span></strong></p>
</div>