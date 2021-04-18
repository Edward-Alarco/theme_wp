<?php 

/*registrando zonas de menu*/
function hotel_menus(){
    register_nav_menus(array(

        'main_menu' => __('Menu Principal en Encabezado','hotel')

    ));
}

add_action('init','hotel_menus')


?>