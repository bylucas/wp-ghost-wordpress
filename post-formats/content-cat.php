<?php
//
// Used for shows excerpts on the category page.
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="post-header">
        <?php
        
        the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
    </header>
    <section class="post-excerpt">
        <?php the_excerpt(); ?>
    </section>
    <footer class="post-meta">
        <?php ghost_cat_entry_meta(); ?>
    </footer>
</article>