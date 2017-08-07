<?php
// The index template file
// This is one of two files (style.css being the other), needed as a minimum in a WordPress theme.
// This page is to display a page when nothing more specific matches a query,
// e.g., it puts together the home page when no home.php file exists.
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
        <header class="main-header">
            <nav class="main-nav overlay clearfix">
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>
            <div class="vertical">
                <div class="main-header-content inner">
                    <h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
                    <h2 class="page-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
            <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
        </header>
        <main id="content" class="content" role="main">
        <?php
        if ( have_posts() ) :
                    // Start the loop.
                    while ( have_posts() ) : the_post();
                        get_template_part( 'post-formats/content', 'index' );
                    // End the loop.
                    endwhile;
                    ghost_page_navigation();
                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'post-formats/content', 'none' );
        endif; ?>
        </main>
        <!-- end main -->
        <?php get_footer(); ?>