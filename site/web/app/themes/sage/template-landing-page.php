<?php
/**
 * Template Name: Landing page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="title-wrap">
    <h1 class="strapline"><?php the_field('strapline'); ?></h1>
    <h4 class="tagline"><?php the_field('tagline'); ?></h4>
  </div>
<?php endwhile; ?>
