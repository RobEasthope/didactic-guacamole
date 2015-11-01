<article <?php post_class(); ?>>
  <!-- Everything else -->
  <?php if (is_category('!Guac Recipes')) : ?>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>

  <!-- Guac recipes -->
  <?php if (is_category('Guac Recipes')) : ?>
    <div class="col-lg-4 recipe-thumbnail">
      <img src="<?php the_field('guac_photo'); ?>" alt="" />
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <!-- <?php get_template_part('templates/entry-meta'); ?> -->
      </header>
    </div>
  <?php endif; ?>
</article>
