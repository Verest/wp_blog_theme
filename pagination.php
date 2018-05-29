<div class="pagination">
  <div class="nav-previous alignright"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="page-marker">Page
    <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>
     of
    <?php echo $wp_query->max_num_pages  ?>
  </div>
  <div class="nav-next alignleft"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>
