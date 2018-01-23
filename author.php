<?php
// The template for displaying author information and post excerpts by the author
get_header(); ?>
<body <?php body_class( 'nav-closed'); ?>>
<div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
    <?php get_template_part('nav'); ?>
    <div id="top" class="site-wrapper">
         <a class="scroll-on-page-link" href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        
        <a class="skip-link screen-reader-text" href="#content">
            <?php _e( 'Skip to content', 'ghost' ); ?>
        </a>
        <?php $authorImage = get_the_author_meta('image', $authorID); ?>
        <header class="main-header post-head" style="background-image: url('<?php echo $authorImage; ?>')">
            <nav class="main-nav overlay clearfix">
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>
        </header>
        <section class="author-profile inner">
            <figure class="author-image">
                <?php
                
                $author_bio_avatar_size = apply_filters( 'ghost_author_bio_avatar_size', 120 );
                echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ); ?>
            </figure>
            <h1 class="author-title"><?php echo get_the_author(); ?></h1>
            <h2 class="author-bio"><?php the_author_meta( 'description' ); ?></h2>
            <div class="author-meta">
                <span class="author-location icon-location"><?php the_author_meta( 'area_profile' ); ?></span>
                <?php $author_id = get_the_author_meta('ID'); ?>
                <span class="author-stats"><i class="icon-stats"></i> <?php echo count_user_posts($author_id); ?></span>
            </div>
        </section>
        <main class="content" role="main">
        <?php while ( have_posts() ) : the_post();
        // Include the post format-specific template for the content.
        get_template_part( 'post-formats/content', 'author' ); ?>
        <?php endwhile; ?>
        <?php ghost_page_navigation(); ?>
        </main>
        <!-- end main -->
        <?php get_footer(); ?>