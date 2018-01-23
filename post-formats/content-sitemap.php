<?php
// Used to display content on the sitemap page
//
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php
    /* translators: %s: Name of current post */
    the_content( sprintf(
    __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ghost' ),
    the_title( '<span class="screen-reader-text">', '</span>', false )
    ) );
    ?>

    <section class="sitemap-wrap">
    <div class="post-ending"><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i></div>
    <div class="sitemap-left">
        <h3><?php _e('Pages', 'ghost'); ?></h3>
        <ul>
            <?php wp_list_pages('title_li='); ?>
            </ul><!-- end page-ul -->
            <h3><?php _e('Archives', 'ghost'); ?></h3>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <h3><?php _e('Categories', 'ghost'); ?></h3>
            <ul class="page-ul">
                <?php wp_list_categories('title_li='); ?>
                </ul><!-- end page-ul -->
                </div><!-- end site_left -->
                <div class="sitemap-right">
                    <h3><?php _e('Articles', 'ghost'); ?></h3>
                    <ul>
                        <?php $recentPosts = new WP_Query();
                        $recentPosts->query('showposts=1000&cat=-8'); ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <li>
                            <?php echo get_post_meta($post->ID, 'top-title', true); ?><span>&nbsp;</span>
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        </ul><!-- end page-ul -->
                        </div><!-- end site_right -->
                        </section>

                     <div class="post-ending"><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i></div>
                    <footer class="post-meta">
                        <?php
                        edit_post_link(
                        sprintf(
                        /* translators: %s: Name of current page */
                        __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'ghost' ),
                        get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                        );
                        ?>
                    </footer>
                </article>