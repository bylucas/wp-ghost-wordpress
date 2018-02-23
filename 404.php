<?php
// 404 page not found

get_header(); ?>
<body <?php body_class( 'nav-closed'); ?>>
         <div class="site-wrapper">
        <main id="content" class="content" role="main">
        <section class="error-404">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/404.png" alt="404 page not found" width="400" height="400" class="aligncenter">
        
    <header class="post-not-found-header">
        <h1><span><?php _e( 'Oops!', 'ghost' ); ?></span><br>
        <?php _e( 'That page can&rsquo;t be found', 'ghost' ); ?>
        </h1>
    </header>
</section>
    <section class="post-not-found-body">
        <p>
            <?php _e( 'Apologies, but no results were found. Perhaps another search will help or see the latest Articles below...', 'ghost' ); ?>
        </p>
        <div class="post-not-found-search-box">
            <?php get_search_form(); ?>
        </div>
        <h3><?php _e('Check out the latest articles', 'ghost'); ?></h3>
        <ul>
            <?php
                $recentPosts = new WP_Query();
            $recentPosts->query('showposts=10');?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </li>
            <?php // End the loop.
            endwhile; ?>
        </ul>
    </section>

        </main><!-- end main -->
        <?php get_footer(); ?>