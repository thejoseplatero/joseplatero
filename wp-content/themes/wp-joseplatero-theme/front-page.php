<?php get_header(); ?>

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