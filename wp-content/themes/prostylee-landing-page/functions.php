<?php 
	define('PROSTYLEE_LANDING', 'prostylee_landing');

	if ( ! function_exists( PROSTYLEE_LANDING.'_setup' ) ) :
	function prostylee_landing_setup() {

		load_theme_textdomain( PROSTYLEE_LANDING, get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', PROSTYLEE_LANDING ),
				'footer' => __( 'Footer Menu', PROSTYLEE_LANDING ),
				'social' => __( 'Social Links Menu', PROSTYLEE_LANDING ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', PROSTYLEE_LANDING ),
					'shortName' => __( 'S', PROSTYLEE_LANDING ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', PROSTYLEE_LANDING ),
					'shortName' => __( 'M', PROSTYLEE_LANDING ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', PROSTYLEE_LANDING ),
					'shortName' => __( 'L', PROSTYLEE_LANDING ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', PROSTYLEE_LANDING ),
					'shortName' => __( 'XL', PROSTYLEE_LANDING ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);
	}
	endif;
	add_action( 'after_setup_theme', PROSTYLEE_LANDING.'_setup' );


	function prostylee_landing_styles() {
		//$temp = get_template_directory_uri();
		wp_enqueue_style( PROSTYLEE_LANDING.'-style', 'http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( PROSTYLEE_LANDING.'-bootstrap-css', 'http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
        wp_enqueue_style( PROSTYLEE_LANDING.'-aos-css', 'http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/css/aos.css', array(), wp_get_theme()->get( 'Version' ) );
	}
	add_action('wp_enqueue_scripts', PROSTYLEE_LANDING.'_styles');

	function prostylee_landing_scripts() {
		wp_enqueue_script( PROSTYLEE_LANDING.'-bootstrap-js', 'http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/js/bootstrap.min.js', array(), '0.1', false );
        wp_enqueue_script( PROSTYLEE_LANDING.'-aos-js', 'http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/js/aos.js', array(), '0.1', false );
	}

	add_action('wp_enqueue_scripts', PROSTYLEE_LANDING.'_scripts');
?>
