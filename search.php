<?php
// The search template file
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
		<header class="main-header post-head" style="background-image: url('<?php echo get_header_image(); ?>'); background-position: center center;">
			<nav class="main-nav overlay clearfix">
				<a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
			</nav>
			<div class="vertical">
				<div class="main-header-content inner">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'ghost' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
				</div>
			</div>
		</header>
		<?php if ( have_posts() ) : ?>
		
		<main id="content" class="content" role="main">
		<?php // Start the loop.
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