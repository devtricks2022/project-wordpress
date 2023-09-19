<?php

function devtricks_display_menu_primary(){
    // Hiển thị menu
    
    wp_nav_menu(
        array(
            'theme_location' => 'primary-menu', // Tên của menu cần hiển thị
            'menu_class' => 'menu', // Class CSS cho menu
            'container' => 'nav', // Phần tử bao bọc menu
        )
    );

}

