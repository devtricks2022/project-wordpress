<?php 
function devtricks_setup(){





// Đăng ký menu
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Menu', // Tên và vị trí của menu
            'footer-menu' => 'Footer Menu'
        )
    );


}