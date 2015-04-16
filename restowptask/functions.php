<?php 


function my_init()
{
	if ( !is_admin() ) {
	    wp_deregister_script('jquery');
		//wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2', true);
        wp_register_script('jquery',get_template_directory_uri() . '/js/vendor/jquery-1.11.0.min.js', false, '1.11.0', true);
		wp_enqueue_script( 'jquery' );


        wp_register_script('myscript',get_template_directory_uri() . '/js/bootstrap.js',array( 'jquery' ),'1.4.2',true );
        wp_enqueue_script('myscript');
		wp_register_script('myscript1',get_template_directory_uri() . '/js/carouFredSel.js',array( 'jquery' ),'1.4.2',true );
		wp_enqueue_script('myscript1');

		wp_register_script('myscript2',get_template_directory_uri() . '/js/main.js',array( 'jquery' ),'1.4.2',true );
		wp_enqueue_script('myscript2');

		wp_register_script('myscript3',get_template_directory_uri() . '/js/plugins.js',array( 'jquery' ),'1.4.2',true );
		wp_enqueue_script('myscript3');
		
		wp_register_script('myscript4',get_template_directory_uri() . '/js/vendor/jquery.gmap3.min.js',array( 'jquery' ),'1.4.2',true );
		wp_enqueue_script('myscript4');

		wp_register_script('myscript5',get_template_directory_uri() . '/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js',array( 'jquery' ),'1.0',true );
		wp_enqueue_script('myscript5');
	}

}
 add_action('init','my_init');



