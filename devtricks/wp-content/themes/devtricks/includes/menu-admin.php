<?php

// Đăng ký menu quản trị
function register_admin_menu() {
    add_menu_page('Admin Menu', 'Admin Menu', 'manage_options', 'admin-menu', 'admin_menu_callback', 'dashicons-admin-generic', 2);
    add_submenu_page('admin-menu', 'Submenu Page', 'Submenu Page', 'manage_options', 'submenu-page', 'submenu_page_callback');
}

// Callback function cho trang menu quản trị
function admin_menu_callback() {
    echo '<h1>Admin Menu Page</h1>';
}

// Callback function cho trang submenu
function submenu_page_callback() {
    echo '<h1>Submenu Page</h1>';
}