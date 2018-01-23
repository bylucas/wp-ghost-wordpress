<?php
// The template for displaying all default pages
get_header(); ?>
<body <?php body_class( 'post-template nav-closed'); ?>>
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
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
        
        <header class="main-header post-head" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
            <?php } else { ?>
            
            <header class="main-header post-head" style="background-image: url('<?php echo get_header_image(); ?>')">
                <?php } ?>
                <nav class="main-nav overlay clearfix">
                    <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
                </nav>
            </header>
            <main class="post-template content" role="main">
            <?php
            // Include the post format-specific template for the content.
            get_template_part( 'post-formats/content', 'page' ); ?>
            <?php endwhile; ?>
            </main>
            <!-- end main -->
            <?php get_footer(); ?>