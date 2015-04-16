<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage restowptast
 * @since aaa
 */
?><!DOCTYPE html>
<html >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'title' ); ?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" href="css/style.css">
	<?php wp_head(); ?>    
    </head>
    <body  <?php body_class(); ?>>
            <header>
		<!--<div id="main-header"> -->
                    <div class="container">
                        <div class="row">
                                <div class="main-menu">
                                    <div class="col-md-3">
                                        <div class="logo">
                                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/resto_logo.png"></a>
                                        </div>
                                    </div>
					                   <?php wp_nav_menu(); ?>
                                    
                                </div>
                        </div>
                    </div>
               <!-- </div> -->
            </header>

	    <div id="slider">

                  <ul class="slides">
                    <li>
                      <img src="<?php bloginfo('template_directory'); ?>/images/header_grains.jpg" alt="" />
                    </li>

                  </ul>
            </div>
		 
