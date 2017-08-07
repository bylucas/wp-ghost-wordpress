<?php
// Shows the excerpts for the monthly, yearly archives
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
        <?php _e( 'Skip to content', 'ghost' ); ?></a>
        <header class="main-header">
            <nav class="main-nav overlay clearfix">
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>
            <?php if ( have_posts() ) : ?>
            
            <div class="vertical">
                
                <div class="main-header-content inner">
                    <?php the_archive_title( '<h2 class="archive-title">', '</h2>' );
                    
                    the_archive_description( '<h2 class="page-description">', '</h2>' ); ?>
                </div>
            </div>
        </header>
        
        <main id="content" class="content" role="main">
        <?php // Start the loop.
                    while ( have_posts() ) : the_post();
                        get_template_part( 'post-formats/content', 'index' );
                    // End the loop.
                    endwhile;
                    ghost_page_navigation();
                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'post-formats/content', 'none' );
        endif; ?>
        </main><!-- end main -->
        <?php get_footer(); ?>