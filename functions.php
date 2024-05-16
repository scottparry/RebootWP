<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RebootWP
 * @since 1.0.0
 */
if ( ! function_exists( 'rebootwp_setup' ) ) :
    function rebootwp_setup() {
	    // remove core block patterns.
	    remove_theme_support( 'core-block-patterns' );

        // add responsive embeds
        add_theme_support( 'responsive-embeds' );

        // add appearance tools
        add_theme_support( 'appearance-tools' );
        
        // add block style support
        add_theme_support( 'wp-block-styles' );

        // add editor style support
        add_theme_support( 'editor-styles' );

        // enqueue editor style
	    add_editor_style( 'style.css' );
    }
	add_action( 'after_setup_theme', 'rebootwp_setup' );
endif;
/**
 * Enqueue styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 *
 */
if ( ! function_exists( 'rebootwp_style' ) ) :
	function rebootwp_style() {
	    wp_enqueue_style( 'rebootwp', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
	add_action( 'wp_enqueue_scripts', 'rebootwp_style' );
	/**
	 * Core will override anything outside of the .editor-styles-wrapper 
	 * when using editor-styles, so we need to use enqueue_block_assets
	 * for matching any admin component styling.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/enqueue_block_assets/
	 *
	 */
	add_action( 'enqueue_block_assets', 'rebootwp_style' );
endif;
/**
 * Register custom block styles.
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */
if ( ! function_exists( 'rebootwp_register_block_styles' ) ) :
	function rebootwp_register_block_styles() {
		/*
		 * Using an array() so blocks can have multiple style attributes. inline_style
		 * only allows one style per block.
		 */
		$rebootwp_block_styles = array(
	        /* core/columns */
	        'core/column' => array(
		        'rebootwp-column-border-radius' => esc_html__( 'Border Radius', 'rebootwp' ),
				'rebootwp-column-box-shadow'    => esc_html__( 'Box Shadow', 'rebootwp' ),
			),
	        /* core/cover */
	        'core/cover' => array(
		        'rebootwp-blur-image' => esc_html__( 'Blur', 'rebootwp' ),
			),
			/* core/group */
	        'core/group' => array(
		        'rebootwp-group-border-radius' => esc_html__( 'Border Radius', 'rebootwp' ),
				'rebootwp-group-box-shadow'    => esc_html__( 'Box Shadow', 'rebootwp' ),
			),
	        /* core/image */
	        'core/image' => array(
		        'rebootwp-circle-image' => esc_html__( 'Circle', 'rebootwp' ),
			),
			/* core/heading */
			'core/heading' => array(
		        'rebootwp-heading-gradient' => esc_html__( 'Gradient', 'rebootwp' ),
			),
			/* core/paragraph */
			'core/paragraph' => array(
		        'rebootwp-paragraph-gradient' => esc_html__( 'Gradient', 'rebootwp' ),
			),
			/* core/site-title */
			'core/site-title' => array(
		        'rebootwp-site-title-gradient' => esc_html__( 'Gradient', 'rebootwp' ),
			),
		);
		
		foreach ( $rebootwp_block_styles as $block_name => $style_properties ) {
			foreach ( $style_properties as $name => $label ) {
				register_block_style( $block_name, array( 'name'  => $name, 'label' => $label, ) );
			}
		}
	}
	add_action( 'init', 'rebootwp_register_block_styles' );
endif;
/**
 * Load custom block styles only when the block is used.
 */
if ( ! function_exists( 'rebootwp_enqueue_custom_block_styles' ) ) :
	function rebootwp_enqueue_custom_block_styles() {
		// scan css folder
		$styles = glob( get_template_directory() . '/assets/css/*.css' );
	
		foreach ( $styles as $style ) {
			$filename   = basename( $style, '.css' );
			$block_name = str_replace( 'wp-core-', 'core/', $filename );
	
			wp_enqueue_block_style( $block_name, array( 'handle' => "rebootwp-block-{$filename}", 'src' => get_theme_file_uri( "assets/css/{$filename}.css" ), 'path' => get_theme_file_path( "assets/css/{$filename}.css" ) ) );
		}
	}
	add_action( 'init', 'rebootwp_enqueue_custom_block_styles' );
endif;
/**
 * Register block pattern categories.
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 */
if ( ! function_exists( 'rebootwp_pattern_categories' ) ) :
	function rebootwp_pattern_categories() {
		$rebootwp_pattern_categories = array(
			'rebootwp/about' => array(
				'label' => esc_html__( 'About', 'rebootwp' ),
			),
			'rebootwp/cards' => array(
				'label' => esc_html__( 'Cards', 'rebootwp' ),
			),
			'rebootwp/features' => array(
				'label' => esc_html__( 'Features', 'rebootwp' ),
			),
			'rebootwp/footers' => array(
				'label' => esc_html__( 'Footers', 'rebootwp' ),
			),
	        'rebootwp/headers' => array(
				'label' => esc_html__( 'Headers', 'rebootwp' ),
			),
			'rebootwp/pages' => array(
				'label' => esc_html__( 'Pages', 'rebootwp' ),
	        ),
	        'rebootwp/posts' => array(
				'label' => esc_html__( 'Posts', 'rebootwp' ),
			),
			'rebootwp/pricing' => array(
				'label' => esc_html__( 'Pricing', 'rebootwp' ),
			),
	        'rebootwp/testimonials' => array(
				'label' => esc_html__( 'Testimonials', 'rebootwp' ),
			),
			'rebootwp/text' => array(
				'label' => esc_html__( 'Text', 'rebootwp' ),
			)
		);
	
		foreach ( $rebootwp_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category( $category_name, $category_properties );
		}
	}
	add_action( 'init', 'rebootwp_pattern_categories', 10 );
endif;
/**
 * Register template part area for Sidebar.
 *
 * @link https://developer.wordpress.org/reference/hooks/default_wp_template_part_areas/
 *
 */
if ( ! function_exists( 'rebootwp_template_part_areas' ) ) :
	function rebootwp_template_part_areas( array $areas ) {
		$areas[] = array(
			'area'        => 'sidebar',
			'area_tag'    => 'section',
			'description' => esc_html__( 'The Sidebar template can be found on the Page with Sidebar template.', 'rebootwp' ),
			'icon'        => 'sidebar',
			'label'       => esc_html__( 'Sidebar', 'rebootwp' ),
		);
	
		return $areas;
	}
	add_filter( 'default_wp_template_part_areas', 'rebootwp_template_part_areas' );
endif;