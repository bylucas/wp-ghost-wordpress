<?php
/**
* The template for displaying Author bios
*/
?>
<footer class="post-footer">
    
    <figure class="author-image">
        
        <?php $author_bio_avatar_size = apply_filters( 'ghost_author_bio_avatar_size', 80 );
        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ); ?>
    </figure>
    <section class="author">
        <h3><?php echo get_the_author(); ?></h3>
            <?php the_author_meta( 'description' ); ?>
            
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                <?php printf( __( 'View all posts by %s', 'ghost' ), get_the_author() ); ?>
            </a>
        
        <div class="author-meta">
            <span class="author-location icon-location"><?php the_author_meta( 'area_profile' ); ?></span>
        </div>
    </section>
    <section class="share">
        <h4>Share this post</h4>
        <a class="icon-twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>;url=<?php esc_url( get_permalink() ); ?>/"
            onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
            <span class="hidden">Twitter</span>
        </a>
        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?url=<?php esc_url( get_permalink() ); ?>/"
            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
            <span class="hidden">Facebook</span>
        </a>
        <a class="icon-google-plus" href="https://plus.google.com/share?url=<?php esc_url( get_permalink() ); ?>/"
            onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
            <span class="hidden">Google+</span>
        </a>
    </section>
</footer>