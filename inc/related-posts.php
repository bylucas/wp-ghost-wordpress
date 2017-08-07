<?php
// POPULAR POSTS FUNCTION
// ----------------------------------------
// Popular Posts Function (call using ghost_popular_posts(); ) for use on pages
function ghost_popular_posts() {
if (is_page() ) {

$args=array(
'orderby'=>"post_date",
'posts_per_page' => 3,
'ignore_sticky_posts'=> 1
);
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ) {

echo '<div class="popular-post-wrap">';
    echo '<h3>Popular...</h3>';
    while ( $the_query->have_posts() ) {
    $the_query->the_post(); ?>
    <div class="popular-post">
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php
            if ( has_post_thumbnail() ) {
            the_post_thumbnail('related');
            
            } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/popular-post.jpg" alt="popular post temp image" />
            <?php } ?>
        </a>
        <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <?php
    }
echo '</div>';
}
wp_reset_query();
}
} // end ghost popular posts function