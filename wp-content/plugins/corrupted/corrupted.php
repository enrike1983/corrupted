<?php
/**
 * @package bb-loader
 * @version 1.0
 */
/*
Plugin Name: Maon loader
Description: Plugin that loads custom stuffs for theme
Author: Eric Antonello
Author URI: http://ericantonello.com
*/

function custom_post_types() {
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )

        ));

    register_post_type( 'gigs',
        array(
            'labels' => array(
                'name' => __( 'Gigs' ),
                'singular_name' => __( 'Gigs' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )
        ));

    register_post_type( 'releases',
        array(
            'labels' => array(
                'name' => __( 'Releases' ),
                'singular_name' => __( 'Releases' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )
        ));

    register_post_type( 'photos',
        array(
            'labels' => array(
                'name' => __( 'Photos' ),
                'singular_name' => __( 'Photos' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )
        ));
}

add_action( 'init', 'custom_post_types' );