<?php
/*
Plugin Name:  25173_plugin
Plugin URI:   http://www.stackey.nl/bewijzenmap/periode2.1/cms/wordpress/
Description:  het is een licentie waarbij je aantoont dat het niet oorstponkelijk een werk is van WordPress maar afgeleid ervan.
Version:      20160911
Author:       WordPress.org
Author URI:   http://www.stackey.nl/bewijzenmap/periode2.1/cms/wordpress/
License:      GPL2
License URI:  http://www.stackey.nl/bewijzenmap/periode2.1/cms/wordpress/
Text Domain:  Timothy
Domain Path:  /languages
*/



// Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;


function test_register_post_type() {


    $labels = array( 'name' => _x( 'Portfolio', 'Post type general name', 'Timothy' ),
                     'singular_name' => _x( 'Portfolio Item', 'Post type singular name', 'Timothy' ),
                     'menu_name' => _x( 'Portfolio Items', 'Admin Menu text', 'Timothy' ),
                     'name_admin_bar' => _x( 'Portfolio Items', 'Add New on Toolbar', 'Timothy' ),
    );
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon'			 => 'dashicons-screenoptions',
	);


register_post_type( 'test_portfolio', $args );

}
add_action( 'init', 'test_register_post_type' );


