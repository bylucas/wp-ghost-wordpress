<?php
// Scripts, Styles and Fonts
// -------------------------
function ghost_scripts_styles() {
// ghost Normalise stylesheet.
wp_enqueue_style( 'ghost-screen', get_template_directory_uri() . '/css/screen.css', array());
// Theme stylesheet.
wp_enqueue_style( 'ghost-style', get_template_directory_uri() . '/css/style.css', array());
// Print stylesheet.
wp_enqueue_style( 'ghost-print', get_template_directory_uri() . '/css/print.css', array());
// fontawesome stylesheet
wp_enqueue_style( 'ghost-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', array() );
// Load the main stylesheet so that styles can be added via the editor.
wp_enqueue_style( 'ghost-user-style', get_stylesheet_uri() );
// comment reply script for threaded comments
if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
wp_enqueue_script( 'comment-reply' );
}
// adding scripts to the footer
wp_enqueue_script( 'ghost-fitvids', get_template_directory_uri() . '/js/min/jquery.fitvids-min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'ghost-index', get_template_directory_uri() . '/js/min/index-min.js', array( 'jquery' ), '', true );
// enqueue the highlight code style and script if is single page
// Using Github stylesheet see the website for more choices
if ( is_single() ) {
wp_enqueue_style( 'ghost-highlightcode-stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/github.min.css', array(), '' );
wp_enqueue_script( 'ghost-highlightcode', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js', array('jquery'), '9.1.0', true );
}
wp_enqueue_script( 'ghost-scripts', get_template_directory_uri() . '/js/min/scripts-min.js', array( 'jquery' ), '', true );
wp_localize_script( 'ghost-scripts', 'screenReaderText', array(
'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'ghost' ) . '</span>',
'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'ghost' ) . '</span>',
) );
}

add_action('wp_enqueue_scripts', 'ghost_scripts_styles');