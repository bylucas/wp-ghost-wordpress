<?php
// Template Name: Start-page
// Based on the index/home page with content Area
get_header(); ?>
<body <?php body_class('nav-closed'); ?>>

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
                    <h1 class="page-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    
                    <h2 class="page-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
            <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
        </header>
        <main class="post-template content" role="main">
        
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        // Include the post format-specific template for the content.
        get_template_part( 'post-formats/content', 'page' ); ?>
        
        </main><!-- end main -->
        <?php // End the loop.
        endwhile; ?>
        <?php get_footer(); ?>