<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="main_content">
  <h2>Page Not Found</h2>
  <?php
    global $wp;
    echo home_url( $wp->request );
  ?>
</div>

<?php get_footer(); ?>
