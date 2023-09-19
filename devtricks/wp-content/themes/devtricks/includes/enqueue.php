<?php

function devtricks_styles() {
    wp_enqueue_style( 'bootstrap',THEME_URL. '/css/bootstrap.min.css' );
    wp_enqueue_style( 'templatemo-style',THEME_URL. '/css/templatemo-style.css' );
}
function devtricks_scripts(){
    wp_enqueue_script(  'bootstrap',THEME_URL. '/js/jquery-1.11.3.min.js' );
    wp_enqueue_script(  'bootstrap',THEME_URL. '/js/bootstrap.min.js' );
}


