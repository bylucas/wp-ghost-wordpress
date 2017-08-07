<?php
// =======================
// Primary Menu Template
// =======================

?>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<nav id="site-navigation" class="nav-menu" role="navigation">
  
  <?php wp_nav_menu( array(
  'theme_location' => 'primary',
  'container' => 'false',
  'menu_id' => '',
  'menu_class' => ''
  ) );
  ?>
</nav>
<?php endif; ?>