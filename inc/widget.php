<?php
// Register widget area.
// ---------------------
function ghost_widgets_init() {
register_sidebar( array(
'name' => __( 'Sidebar', 'ghost' ),
'id' => 'sidebar1',
'description' => __( 'Appears on templates with sidebar activated', 'ghost' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
) );
}
add_action( 'widgets_init', 'ghost_widgets_init' );