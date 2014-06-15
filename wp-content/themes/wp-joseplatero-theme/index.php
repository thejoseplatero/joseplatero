<?php get_header(); ?>

<div class="grid_12 omega clearfix">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <hr>

  <?php endwhile; else: ?>
    <p>There are no posts or pages</p>
  <?php endif; ?>
</div> 

  <?php get_template_part('content', 'testimonials') ?>

  <?php get_footer();  ?>