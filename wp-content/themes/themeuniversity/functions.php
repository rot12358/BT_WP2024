<?php  
if ( ! function_exists( 'them_style' ) ) {

	function them_style()
	// get_stylesheet_directory_uri 
	{
		
		wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
		wp_enqueue_style( 'font_google', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" );
		wp_enqueue_style( 'index-university', get_theme_file_uri('build/index.css') );
		wp_enqueue_style( 'index-university-extra', get_theme_file_uri('build/style-index.css') );
		wp_enqueue_script('bundle_script',get_theme_file_uri('build/index.js'), array('jquery'), '1.0' , true);
	}
}
add_action( 'wp_enqueue_scripts', 'them_style' );


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu()
	{
		register_nav_menus( array(
	    	'primary_menu' => __( 'Menu trang chủ', 'university' ),
	    	'footer_menu_1' => __( 'Menu footer vi tri 1', 'university' ),
	    	'footer_menu_1' => __( 'Menu footer vi tri 1', 'university' ),
			'menu_mobile' => __( 'Menu Mobile', 'university' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}