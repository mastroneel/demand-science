<?php get_header(); ?>

<?php

  if( have_posts() ):

    while( have_posts() ): the_post(); ?>

    <div class="page-header">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="content-container">
      <p><?php the_content(); ?></p>
    </div>
    <?php endwhile;

  endif;

?>


<?php get_footer(); ?>
