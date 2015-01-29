<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	
	// For either a plugin or a theme, you can then enqueue the script:
}
remove_filter( 'the_content', 'wpautop' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>