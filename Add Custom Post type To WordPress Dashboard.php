<?php
// Register the custom post type
function my_custom_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Custom Post Type Name Here', // Plural name for the post type
            'singular_name' => 'Custom Post', // Singular name for the post type
        ),
        'public' => true, // Whether the post type is publicly accessible
        'has_archive' => true, // Whether to enable post type archives
        'menu_icon' => 'dashicons-admin-post', // Icon URL or Dashicons class for the menu item
        'supports' => array( 'title', 'editor', 'thumbnail' ), // Supported features for the post type
    );
    register_post_type( 'custom_post_type', $args ); // Unique slug for the post type
}
add_action( 'init', 'my_custom_post_type' );
