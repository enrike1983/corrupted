<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/dist/jquery.min.js', array(), '1.0.0', false );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );
    wp_register_script( 'waypoints', get_template_directory_uri() . '/js/jquery-waypoints/waypoints.min.js', array(), '1.0.0', true );
    wp_register_script( 'skrollr', get_template_directory_uri() . '/js/skrollr/dist/skrollr.min.js', array(), '1.0.0', false );
    wp_register_script( 'isotope', get_template_directory_uri() . '/js/isotope/dist/isotope.pkgd.js', array(), '1.0.0', false );
    wp_register_script( 'hoverdir', get_template_directory_uri() . '/js/DirectionAwareHoverEffect/js/jquery.hoverdir.js', array(), '1.0.0', false );
    wp_register_script( 'slick', get_template_directory_uri() . '/js/slick/dist/slick.min.js', array(), '1.0.0', false );
    wp_register_script( 'backstretch', get_template_directory_uri() . '/js/jquery-backstretch/jquery.backstretch.min.js', array(), '1.0.0', false );
    wp_register_script( 'caroufredsel', get_template_directory_uri() . '/js/gilbitron/carouFredSel/jquery.carouFredSel-6.2.1-packed.js', array(), '1.0.0', false );
    

    // enqueue scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('skrollr');
    wp_enqueue_script('isotope');
    wp_enqueue_script('hoverdir');
    wp_enqueue_script('slick');
    wp_enqueue_script('backstretch');
    wp_enqueue_script('caroufredsel');

    wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Abel');
    
  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

?>