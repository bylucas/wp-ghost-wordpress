<?php
/**
* ghost Customizer
* Sets up the WordPress core custom header. The theme uses a custom background header.
*/
function ghost_custom_header() {

// The header image is a background image
add_theme_support( 'custom-header', array(
'default-text-color'     => '#333',
'width'                  => 1200,
'height'                 => 700,
'flex-height'            => true,
'wp-head-callback'       => 'ghost_header_style',
) );
}
add_action( 'after_setup_theme', 'ghost_custom_header' );
if ( ! function_exists( 'ghost_header_style' ) ) :
function ghost_header_style() {
$header_image = get_header_image();
// If no custom options for text are set, lets go away.
if ( empty( $header_image ) && display_header_text() ) {
return;
}
// We may have a header background.
?>
<style type="text/css" id="ghost-header-css">
<?php // Has a Custom Header been added?
if ( ! empty( $header_image)): ?> .main-header {
background-image: url(<?php header_image();
?>);
background-repeat: no-repeat;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

<?php endif;
// Has the text been hidden?
if ( ! display_header_text()): ?> .page-title,
.page-description {
clip: rect(1px, 1px, 1px, 1px);
position: absolute;
}

<?php endif;
?>
</style>
<?php }
endif; // ghost_header_style
function ghost_sanitize_input( $input ) {
return strip_tags( stripslashes( $input ) );
} // end ghost_sanitize_input
/**
* Adds postMessage support for site title and description for the Customizer.
*/
function ghost_customize_register( $wp_customize ) {

$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
// Remove the core header textcolor control, and background color.
$wp_customize->remove_control( 'header_textcolor' );
}
add_action( 'customize_register', 'ghost_customize_register', 11 );
// Call the script for live preview
function ghost_customize_preview_js() {
wp_enqueue_script( 'ghost-customize-preview', get_template_directory_uri() . '/js/min/customize-preview-min.js', array( 'customize-preview' ), '20150922', true );
}

add_action( 'customize_preview_init', 'ghost_customize_preview_js' );