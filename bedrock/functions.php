<?php

/*
    ========================================
    NAVIGATION MENUS
    ========================================
*/
function theme_nav_menus(){
    register_nav_menus( array(
        'main'=>'Main Menu',
        'footer'=>'Footer Menu'
        ) );
}

add_action('init','theme_nav_menus' );



/*
    ========================================
    Featured Images
    ========================================
*/

/* Adding support for Featured Images */
add_theme_support( 'post-thumbnails' );

/* add sizes for potential uses of featured images

    add_image_size('name-for-size', width, height, cropped?);

    change what is below to what you need and copy/paste to add more

    At the end is true of false
    false = no crop, just resizes so the image fits in the given box. preserves aspect ratio.
    true = crop, removes part of the image if it is over the given size
*/
add_image_size( 'feature-thumb', 250, 250, true ); //250x250 square image
add_image_size( 'feature-image', 1200, 99999, false);//for use when displaying full featured image on post; 600 pixels wide (and unlimited height)
add_image_size( 'feature-list', 600, 338, true);//for use on homepage list

/*
    ========================================
    Add Widget Area
    ========================================
*/
function add_sidebars() {
	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'add_sidebars' );

?>
