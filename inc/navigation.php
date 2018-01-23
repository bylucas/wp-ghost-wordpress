<?php
// NAVIGATION
// ----------
// PAGE NAVIGATION
function ghost_page_navigation() {
the_posts_pagination( array(
'prev_text'          => __( 'Previous page', 'ghost' ),
'next_text'          => __( 'Next page', 'ghost' ),
'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ghost' ) . ' </span>',
) );
}
function ghost_post_nav_background() {
if ( ! is_single() ) {
return;
}
$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
$next     = get_adjacent_post( false, '', false );
$css      = '';
if ( is_attachment() && 'attachment' == $previous->post_type ) {
return;
}
if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
$css .= '
.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
';
}
if ( $next && has_post_thumbnail( $next->ID ) ) {
$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
$css .= '
.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); }
.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
';
}
wp_add_inline_style( 'ghost-style', $css );
}
add_action( 'wp_enqueue_scripts', 'ghost_post_nav_background' );
// POST NAVIGATION
function ghost_post_navigation() {
the_post_navigation( array(
'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Read This Next', 'ghost' ) . '</span> ' .
'<span class="screen-reader-text">' . __( 'Read This Next - Next post:', 'ghost' ) . '</span> ' .
'<span class="post-title">%title</span>',
'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'You Might Enjoy', 'ghost' ) . '</span> ' .
'<span class="screen-reader-text">' . __( 'You Might Enjoy - previous post:', 'ghost' ) . '</span> ' .
'<span class="post-title">%title</span>',
) );
}
// COMMENT NAVIGATION
function ghost_comment_nav() {
// Are there comments to navigate through?
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
<nav class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'ghost' ); ?></h2>
    <div class="comment-nav-links">
        <?php
        if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'ghost' ) ) ) :
        printf( '<div class="comment-prev">%s</div>', $prev_link );
        endif;
        if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'ghost' ) ) ) :
        printf( '<div class="comment-next">%s</div>', $next_link );
        endif;
        ?>
    </div>
    <!-- .nav-links -->
</nav>
<!-- .comment-navigation -->
<?php
endif;
}
// PAGE LINKS as seen on the posts/pages with more than one page
function ghost_page_links() {
wp_link_pages( array(
'before'      => '<div class="page-links"><span class="screen-reader-text">' . __( 'Pages:', 'ghost' ) . '</span>',
'after'       => '</div>',
'link_before' => '<span>',
'link_after'  => '</span>',
'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ghost' ) . ' </span>%',
'separator'   => '<span class="screen-reader-text">, </span>',
) );
}
?>