<?php 

/*==================================================================================
Register color paette for guttenberg
==================================================================================*/
// function ea_setup() {
// 	// Disable Custom Colors
// 	add_theme_support( 'disable-custom-colors' );
  
// 	// Editor Color Palette
// 	add_theme_support( 'editor-color-palette', array(
// 		array(
// 			'name'  => __( 'Dark Grey', 'ea-starter' ),
// 			'slug'  => 'dark-grey',
// 			'color'	=> '#3D3B38',
// 		),
// 		array(
// 			'name'  => __( 'Grey', 'ea-starter' ),
// 			'slug'  => 'fdry-grey',
// 			'color' => '#72716D',
// 		),
// 		array(
// 			'name'  => __( 'Light Grey', 'ea-starter' ),
// 			'slug'  => 'light-grey',
// 			'color' => '#C7C7C7',
// 		),
// 		array(
// 			'name'  => __( 'Black', 'ea-starter' ),
// 			'slug'  => 'fdry-black',
// 			'color'	=> '#100F0C',
// 		),
// 		array(
// 			'name'  => __( 'White', 'ea-starter' ),
// 			'slug'  => 'white',
// 			'color' => '#ffffff',
// 		),
// 		array(
// 			'name'  => __( 'Pink', 'ea-starter' ),
// 			'slug'  => 'fdry-pink',
// 			'color' => '#FDD8EB',
// 		),
// 		) );
// }
// add_action( 'after_setup_theme', 'ea_setup' );

/*==================================================================================
Allow certain block on Guttenberg
==================================================================================*/
 
/* function misha_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/fd-greybgtext',
		'acf/fd-sharetitle',
		'acf/fd-bluebg',
		'acf/fd-button',
		'acf/fd-teamcard',
		'acf/fd-imagetext',
		'acf/mediatextareablock',
		'core/image',
		'core/separator',
		'core/spacer',
		'core/paragraph',
		'core/heading',
		'core/list'
	);
 
}
add_filter( 'allowed_block_types', 'misha_allowed_block_types' );*/



/*==================================================================================
Register back-end CSS editor
==================================================================================*/
add_theme_support('editor-styles');
add_editor_style( './assets/dist/css/main.css' );
/*==================================================================================
Register new category in guttenberg block
==================================================================================*/

function my_am_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'am-category',
				'title' => __( 'Streaming Culture Category', 'am-category' ),
			),
		)
	);
}
add_filter( 'block_categories', 'my_am_category', 10, 2);

/*==================================================================================
LOAD CUSTOM ACF-GUTENBERG-BLOCKS
==================================================================================*/

require get_template_directory().'/blocks/calibro-frame.php';