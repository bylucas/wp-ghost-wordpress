<div class="nav">
    <div class="nav-inner">
        <div class="nav-top-wrap">
            <h3 class="nav-title">Menu</h3>
            <a href="#" class="nav-close">
                <span class="hidden">Close</span>
            </a>
            <?php
            // Display the Custom Logo
            the_custom_logo();
            // No Custom Logo, just display the site's name
            if (!has_custom_logo()) { ?>
            
            <h1 class="no-custom-logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php } ?>
        </div>
        <!-- nav-top-wrap  -->
        <?php get_template_part('templates/primary-menu'); ?>
        <p class="sitemap-link">For a <em>quick menu</em> try the <a href="<?php echo esc_url( '/sitemap' ); ?>">SiteMap</a></p>
        <section class="social-sidebar">
            <?php get_template_part('templates/social-menu'); ?>
        </section>
        <?php dynamic_sidebar( 'sidebar1' ); ?>
        <div class="sidebar-ending"><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i></div>
    </div>
    <!-- nav-inner -->
</div>
<!-- nav -->
<span class="nav-cover"></span>