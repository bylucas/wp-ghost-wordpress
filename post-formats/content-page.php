<?php
// The default template for displaying default page content
//
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="post-template post-header">
        <?php
        the_title( '<h1 class="post-template post-title">', '</h1>' );
        ?>
    </header>
    
    <section class="post-content">
        <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
        __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ghost' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );
        ghost_page_links();
        ?>
        <div class="post-ending"><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i></div>
    </section>
    <footer class="post-meta">
        <?php
        edit_post_link(
        sprintf(
        /* translators: %s: Name of current page */
        __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'ghost' ),
        get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
        );
        ?>
    </footer>

    <?php if ( is_page() && get_post_meta($post->ID,  'show-popular-posts', true) == '1') :
    ghost_popular_posts();
    
    endif;
    
    // If comments are open or we have at least one comment, load up the comment template.
    
    if ( comments_open() || get_comments_number() ) :
    comments_template();
    endif;  ?>
</article>