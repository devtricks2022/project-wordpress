<?php

// VARIABLES
define("THEME_PATH",get_theme_file_path());
define("THEME_URL",get_theme_file_uri());


// INCLUDES
require THEME_PATH."/includes/setup.php";
require THEME_PATH."/includes/enqueue.php";

require THEME_PATH. "/includes/menu-admin.php";
// HOOKS



add_action('init', 'devtricks_setup');
add_action( 'wp_enqueue_scripts', 'devtricks_styles' );
add_action( 'wp_enqueue_scripts', 'devtricks_scripts' );
add_action('admin_menu', 'register_admin_menu');

// REMOVES

// SHORTCODES