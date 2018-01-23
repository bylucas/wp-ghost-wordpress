<?php
// Function file collects the partial functions in the 'inc' folder
require_once locate_template('/inc/theme-support.php');
require_once locate_template('/inc/setup.php');
require_once locate_template('/inc/scripts-styles-fonts.php');
require_once locate_template('/inc/google-analytics.php');
require_once locate_template('/inc/template-tags.php');
require_once locate_template('/inc/navigation.php');
require_once locate_template('/inc/widget.php');
require_once locate_template('/inc/related-posts.php');
// Call the admin areas
require_once locate_template('/inc/admin-user.php');
require_once locate_template('/inc/admin-category.php');
require_once locate_template('/inc/admin-welcome-page.php');
// Call the the customiser file from the customiser folder
// This is a  basic file
require get_template_directory() . '/customizer/customizer.php';