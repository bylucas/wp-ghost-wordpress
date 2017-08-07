<?php
// Custom template tags
// --------------------
function ghost_entry_meta() {
if ( is_sticky() && is_home() && ! is_paged() ) {
printf( '<span class="feature"><span class="hidden">%s</span></span>', __( 'Featured', 'ghost' ) );
}
if ( 'post' === get_post_type() ) {
$author_avatar_size = apply_filters( 'ghost_author_avatar_size', 42 );
printf( '<a href="%3$s"><img class="author-thumb" %1$s
    <span class="hidden">%2$s</span> %4$s</a>',
    get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
    _x( 'Author', 'Used before post author name.', 'ghost' ),
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    get_the_author()
    );
    }
    $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'ghost' ) );
    if ( $categories_list ) {
    printf( '<span class="post-date"><span class="hidden"> %1$s </span> %2$s</span>',
    _x( 'Categories', 'Used before category names.', 'ghost' ),
    $categories_list
    );
    }
    if ( 'post' === get_post_type() ) {
    $time_string = '<time class="post-date" datetime="%1$s">%2$s</time>';
    $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    get_the_date() );
    printf( '<span class="hidden">%1$s</span> %3$s',
    _x( 'Posted on', 'ghost' ),
    esc_url( get_permalink() ),
    $time_string
    );
    }
    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    echo '<span class="comments-link post-date">';
        /* translators: %s: post title */
        comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'ghost' ), get_the_title() ) );
    echo '</span>';
    }
    edit_post_link( __( 'Edit', 'ghost' ), '<span class="edit-link post-date"> ', '</span>' );
    
    }
    function ghost_post_entry_meta() {
    if ( is_sticky() ) {
    printf( '<span class="feature no-img"><span class="hidden">%s</span></span>', __( 'Featured', 'ghost' ) );
    }
    if ( 'post' === get_post_type() ) {
    $time_string = '<time class="post-date no-line" datetime="%1$s">%2$s</time>';
    $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    get_the_date() );
    printf( '<span class="hidden">%1$s</span> %3$s',
    _x( 'Posted on', 'ghost' ),
    esc_url( get_permalink() ),
    $time_string
    );
    }
    $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'ghost' ) );
    if ( $categories_list ) {
    printf( '<span class="post-date"><span class="hidden"> %1$s </span> %2$s</span>',
    _x( 'Categories', 'Used before category names.', 'ghost' ),
    $categories_list
    );
    }
    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    echo '<span class="comments-link post-date">';
        /* translators: %s: post title */
        comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'ghost' ), get_the_title() ) );
    echo '</span>';
    }
    edit_post_link( __( 'Edit', 'ghost' ), '<span class="edit-link post-date"> ', '</span>' );
    
    }
    function ghost_cat_entry_meta() {
    if ( is_sticky() ) {
    printf( '<span class="feature"><span class="hidden">%s</span></span>', __( 'Featured', 'ghost' ) );
    }
    if ( 'post' === get_post_type() ) {
    $author_avatar_size = apply_filters( 'ghost_author_avatar_size', 42 );
    printf( '<a href="%3$s"><img class="author-thumb" %1$s
        <span class="hidden">%2$s</span> %4$s</a>',
        get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
        _x( 'Author', 'Used before post author name.', 'ghost' ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        get_the_author()
        );
        }
        if ( 'post' === get_post_type() ) {
        $time_string = '<time class="post-date" datetime="%1$s">%2$s</time>';
        $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        get_the_date() );
        printf( '<span class="hidden">%1$s</span> %3$s',
        _x( 'Posted on', 'ghost' ),
        esc_url( get_permalink() ),
        $time_string
        );
        }
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link post-date">';
            /* translators: %s: post title */
            comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'ghost' ), get_the_title() ) );
        echo '</span>';
        }
        edit_post_link( __( 'Edit', 'ghost' ), '<span class="edit-link post-date"> ', '</span>' );
        
        }
        if ( ! function_exists( 'ghost_excerpt_more' ) && ! is_admin() ) :
        // Replaces "[...]" (appended to automatically generated excerpts) with ...
        // and a Continue reading link.
        function ghost_excerpt_more( $more ) {
        $link = sprintf( '<a href="%1$s" class="read-more">%2$s</a>',
        esc_url( get_permalink( get_the_ID() ) ),
        /* translators: %s: Name of current post */
        sprintf( __( '&raquo;', 'ghost' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
        );
        return ' &hellip; ' . $link;
        }
        add_filter( 'excerpt_more', 'ghost_excerpt_more' );
        endif;
        ?>