<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="main_content">
  <h2>All Posts</h2>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <a href="<?php the_permalink() ?>">
      <h3 class="reb_title"><?php the_title(); ?></h3>
    </a>
    <?php the_excerpt();  ?>
  <?php endwhile; else:  ?>
    No Posts Yet
  <?php endif; ?>

  <?php get_template_part('pagination'); ?>
</div>

<?php get_footer(); ?>
