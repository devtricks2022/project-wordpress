<?php 

function footwear_shop_styles() {

    wp_enqueue_style( 'Animate',THEME_URL. '/assets/css/animate.css' );
    wp_enqueue_style( 'Icomoon Icon Fonts',THEME_URL. '/assets/css/icomoon.css' );
    wp_enqueue_style( 'Ion Icon Fonts',THEME_URL. '/assets/css/ionicons.min.css' );
    wp_enqueue_style( 'Bootstrap',THEME_URL. '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'Magnific Popup',THEME_URL. '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'Flexslider',THEME_URL. '/assets/css/flexslider.css' );
    wp_enqueue_style( 'Owl Carousel',THEME_URL. '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'Owl default Carousel',THEME_URL. '/assets/css/owl.theme.default.min.css' );
    wp_enqueue_style( ' Date Picker',THEME_URL. '/assets//css/bootstrap-datepicker.css' );
    wp_enqueue_style( 'Flaticons',THEME_URL. '/assets/fonts/flaticon/font/flaticon.css' );
    wp_enqueue_style( 'Theme style',THEME_URL. '/assets/css/style.css' );
    wp_enqueue_style( 'footwear-shop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'footwear-shop-style', 'rtl', 'replace' );

}


function footwear_shop_scripts(){

    wp_enqueue_script(  'jQuery',THEME_URL. '/assets/js/jquery.min.js' );
    wp_enqueue_script(  'popper',THEME_URL. '/assets/js/popper.min.js' );
    wp_enqueue_script(  'bootstrap',THEME_URL. '/assets/js/bootstrap.min.js' );
    wp_enqueue_script(  'jQuery easing ',THEME_URL. '/assets/js/jquery.easing.1.3.js' );
    wp_enqueue_script(  'Waypoints',THEME_URL. '/assets/js/jquery.waypoints.min.js' );
    wp_enqueue_script(  'Flexslider',THEME_URL. '/assets/js/jquery.flexslider-min.js' );
    wp_enqueue_script(  'Owl carousel',THEME_URL. '/assets/js/owl.carousel.min.js' );
    wp_enqueue_script(  'Magnific Popup',THEME_URL. '/assets/js/jquery.magnific-popup.min.js' );
    wp_enqueue_script(  'Magnific Popup',THEME_URL. '/assets/js/magnific-popup-options.js' );
    wp_enqueue_script(  'Date Picker',THEME_URL. '/assets/js/bootstrap-datepicker.js' );
    wp_enqueue_script(  'Stellar Parallax',THEME_URL. '/assets/js/jquery.stellar.min.js' );
    wp_enqueue_script(  'Main',THEME_URL. '/assets/js/main.js' );

    wp_enqueue_style( 'footwear-shop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'footwear-shop-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

