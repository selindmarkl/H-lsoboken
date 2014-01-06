<?php 

/*  BizzThemes Custom Actions

    *** Explore all available theme actions in lib_theme/theme_hooks.php
	*** Explore all available framework actions in lib_frame/frame_hooks.php
	
	*** Working ACTION example:
	    add_action( 'bizz_head_grid', 'bizz_head_grid_test' );
	    function bizz_head_grid_test() {
			echo 'test';
		}
	*** Working FILTER example:
		add_filter('widget_title', 'my_widget_title');
		function my_widget_title($title) {
			return '<h6>' . $title . '</h6>';
		}
	
START REMOVING or ADDING NEW ACTIONS BELOW THIS LINE */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
function child_manage_woocommerce_styles() {
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	wp_dequeue_style( 'woocommerce_frontend_styles' );
}
