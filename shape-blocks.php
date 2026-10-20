<?php
/**
 * Plugin Name:  Shape Blocks
 * Description:  Custom blocks that replicate the MadeByShape.co.uk homepage.
 * Version:      1.0.0
 * Requires PHP: 8.0
 * Text Domain:  shape-blocks
 *
 * @package ShapeBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SHAPE_BLOCKS_DIR', plugin_dir_path( __FILE__ ) );
define( 'SHAPE_BLOCKS_URL', plugin_dir_url( __FILE__ ) );

/**
 * Register all custom blocks from their block.json files.
 */
function shape_blocks_register(): void {
	$blocks = [
		'shape-hero',
		'shape-projects',
		'shape-cta',
		'shape-services',
		'shape-about',
		'shape-blog-grid',
		'shape-ai-testimonial',
		'shape-marquee',
	];

	foreach ( $blocks as $block ) {
		register_block_type( SHAPE_BLOCKS_DIR . 'blocks/' . $block . '/block.json' );
	}
}
add_action( 'init', 'shape_blocks_register' );

/**
 * Block category for Shape blocks.
 */
add_filter( 'block_categories_all', function ( array $categories ): array {
	return array_merge(
		[
			[
				'slug'  => 'shape-blocks',
				'title' => 'Shape Blocks',
			],
		],
		$categories
	);
} );