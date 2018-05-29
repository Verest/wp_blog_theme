<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="main_content">
  <h2>Posts from: <?php single_month_title(" "); ?></h2>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <a href="<?php the_permalink() ?>">
      <h3 class="reb_title"><?php the_title(); ?></h3>
    </a>
    <?php the_content();  ?>
  <?php endwhile; else:  ?>
    No Posts Yet
  <?php endif; ?>
</div>

<?php get_footer(); ?>
