<?php
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('personnage', array(
		'label' => __('personnages'),
		'singular_label' => __('personnage'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'excerpt', 'thumbnail')
	));
}
