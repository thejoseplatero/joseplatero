<?php get_header(); ?>
</div>
<div id="featured" class="clearfix flexslider">

  <ul class="slides">
    <?php 

    $args = array(
      'post_type' => 'work'
      );

    $the_query = new WP_Query( $args );
    ?>

    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li style="background-color: <?php the_field('background_color'); ?>">
        <div class="container">
          <div class="grid_8">
            <img src="<?php the_field('home_page_slider_image'); ?>">
          </div>
          <div id="featured-info" class="grid_4 omega">
            <h5>Featured Project</h5>
            <h3 style="color: <?php the_field('button_color'); ?>"><?php the_title(); ?></h3>
            <p> <?php the_field('description'); ?></p>
            <p>
              <a class="btn blue" style="background-color: <?php the_field('button_color'); ?>" href="<?php the_permalink(); ?>">View Project &rarr;</a>
            </p>
          </div>
        </div>

      </li>     
      <?php endwhile; else: ?>
        
        <p>There are no posts or pages here</p>

      <?php endif; ?>
  </ul>

</div>

<div class="container clearfix">
  <div class="grid_12 omega">
    <h5>Featured Post</h5>
    <?php 

    $args = array(
      'post_type' => 'post',
      'category_name' => 'featured',
      'posts_per_page' => 1

      );

    $the_query = new WP_Query( $args );

    ?>

    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    </div>




    <div class="push_2 grid_10 omega clearfix">
      <article>

        <?php get_template_part('content', 'post') ?>

      </article>
    </div>
  <?php endwhile; endif; ?>

</div>

<div class="grid_12 omega clearfix">
  <div class="grid_6 recent-post">
    <article>
      <h5>Recent Post</h5>

      <?php 

      $args = array(
        'post_type' => 'post',
        'cat' => -1,
        'posts_per_page' => 1

        );

      $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php get_template_part('content', 'post'); ?>
      <?php endwhile; endif; ?>

    </article>
  </div>


  <?php 

  $args = array(
    'post_type' => 'work'
    );

  $the_query = new WP_Query( $args );
  ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php get_template_part('content', 'work'); ?>


  <?php endwhile; endif; ?>

</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>