<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <h2><?php the_field('guac_type'); ?></h2>
      <h2><?php the_field('guac_region'); ?></h2>
    </header>
    <img src="<?php the_field('guac_photo'); ?>" alt="" />

    <?php the_field('guac_description'); ?>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
