<?php

/*
*ARCHIVO DE REGISTRO Y CARGA DE SCRIPTS Y ESTILOS 
* 
* 
*/

function hotel_theme_styles(){
    //registrar los estilos
    wp_register_style('fontawesome',THEMEROOT . '/css/fontawesome.css', '', '5.1.1', 'all');
    wp_register_style('hotel_styles',get_stylesheet_uri(), array('fontawesome') , '1.0', 'all');

    //cargar los estilos
    wp_enqueue_style('hotel_styles');
}

add_action('wp_enqueue_scripts','hotel_theme_styles');


function hotel_theme_scripts(){
    //registrar scripts
    wp_register_script('parallax',THEMEROOT . '/js/parallax.min.js',array('jquery'),'1.5.0',true);
    wp_register_script('hotel_scripts',THEMEROOT . '/js/main.js',array('jquery','parallax'),'1.0',true);

    //cargar script
    wp_enqueue_script('hotel_scripts');
}

add_action('wp_enqueue_scripts','hotel_theme_scripts');


?>