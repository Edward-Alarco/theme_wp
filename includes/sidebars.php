<?php 

/*registrando zonas widgets*/
function hotel_sidebars(){

    register_sidebar(array(

        'name'          => __( 'Barra Lateral', 'hotel' ),
	    'id'            => 'main-sidebar',
	    'description'   => __( 'Widgets en la barra lateral', 'hotel' ),
        'class'         => '',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>'

    ));


    register_sidebar(array(

        'name'          => __( 'Pie de pagina zona izquierda', 'hotel' ),
	    'id'            => 'sidebar-footer-izq',
	    'description'   => __( 'Widgets en el pie de pagina zona izquierda', 'hotel' ),
        'class'         => '',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>'

    ));


	register_sidebar(array(

        'name'          => __( 'Pie de pagina zona central', 'hotel' ),
	    'id'            => 'sidebar-footer-cent',
	    'description'   => '',
        'class'         => '',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>'

    ));


	register_sidebar(array(

        'name'          => __( 'Pie de pagina zona derecha', 'hotel' ),
	    'id'            => 'sidebar-footer-der',
	    'description'   => '',
        'class'         => '',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>'

    ));
    

}

add_action('widgets_init', 'hotel_sidebars');


?>