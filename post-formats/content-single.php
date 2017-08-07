<?php
// The default template for displaying content
//
// Used for single.
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="post-template post-header">
        <?php
        the_title( '<h1 class="post-template post-title">', '</h1>' );
        ?>
        <section class="post-meta">
            <?php ghost_post_entry_meta(); ?>
        </section>
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
    <?php
    if ( is_single() && get_post_meta($post->ID,  'hide-author-bio', true) != '1') :
    get_template_part( 'templates/author-bio' );
    
    endif;
    // If comments are open or we have at least one comment, load up the comment template.
    
    if ( comments_open() || get_comments_number() ) :
    comments_template();
    endif;  ?>
</article>