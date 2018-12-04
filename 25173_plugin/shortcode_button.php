<?php
/*
Plugin Name:  shortcode_button
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
function make_my_button(){
	return "<a href='http://www.google.nl/' class='button'>Hallo</a>";
}
add_shortcode('my_button', 'make_my_button');

function make_a_button(){
	return "<a href='https://tweedertien.nl/' ><button>are you sure?</button></a>";
}
add_shortcode('my_own_button','make_a_button');

