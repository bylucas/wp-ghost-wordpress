<footer class="site-footer clearfix">

    <section class="social">
        <?php get_template_part('templates/social-menu'); ?>
    </section>
    
    <section class="copyright">
        <?php do_action( 'ghost_credits' ); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>&copy;
        <?php echo date('Y'); ?>
    </section>
</footer>
<!-- end footer -->
</div>
<!-- end wrapper -->
<?php wp_footer(); ?>
</body>
</html>