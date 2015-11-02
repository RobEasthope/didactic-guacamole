<article <?php post_class(); ?>>
  <!-- Guac recipes -->
  <div class="col-lg-4 recipe-thumbnail">
    <img src="<?php the_field('guac_photo'); ?>" alt="" />
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!-- <?php get_template_part('templates/entry-meta'); ?> -->
    </header>
  </div>
  enlivu
</article>
