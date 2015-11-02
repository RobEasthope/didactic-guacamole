<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <h2>Type: <?php the_field('guac_type'); ?></h2>
      <h2> / </h2>
      <h2>Origin: <?php the_field('guac_region'); ?></h2>
    </header>
    <div class="guac-photo">
      <img src="<?php the_field('guac_photo'); ?>" alt="" />
    </div>
    <div class="guac-description">
      <?php the_field('guac_description'); ?>
    </div>
  </article>
<?php endwhile; ?>
