<?php
// Add the menu page
function my_custom_menu_page() {
    add_menu_page(
        'Custom Menu', // Page title
        'Custom Menu', // Menu title
        'manage_options', // Capability required to access the menu page
        'custom-menu', // Unique menu slug
        'my_custom_menu_callback', // Callback function to render the menu page
        'dashicons-admin-generic', // Icon URL or Dashicons class
        25 // Position of the menu item in the admin menu
    );
}
add_action('admin_menu', 'my_custom_menu_page');

// Callback function to render the menu page

function my_custom_menu_callback() {

    // Add your code to render the menu page here
    
	echo '<div class="wrap">';
		 echo '<h1>Custom Menu Page</h1>';
    echo '<p>Welcome to the custom menu page!</p>';
  echo '</div>';
}
