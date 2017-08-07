<?php
// The template for displaying excerpts on the category page
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
        <header class="main-header post-head" style="background-image: url('<?php echo ghost_tax_pic_url(); ?>')">
            <nav class="main-nav overlay clearfix">
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>
            <div class="vertical">
                <div class="main-header-content inner">
                    <h1 class="page-title"><?php single_cat_title( '', true ); ?></h1>
                    <?php
                    if ( category_description() ) : ?>
                    <div class="page-description">
                        <?php echo category_description(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </header>
        <main class="content" role="main">
        <?php
        while ( have_posts() ) : the_post();
        // Include the post format-specific template for the content.
        get_template_part( 'post-formats/content', 'cat' ); ?>
        <?php endwhile; ?>
        <?php ghost_page_navigation(); ?>
        </main>
        <!-- end main -->
        <?php get_footer(); ?>