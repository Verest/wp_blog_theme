<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <h3 class="reb_title"><?php the_title(); ?></h3>
  <?php the_content();  ?>
<?php endwhile; else:  ?>
  No Posts Yet
<?php endif; ?>
<?php get_footer(); ?>
