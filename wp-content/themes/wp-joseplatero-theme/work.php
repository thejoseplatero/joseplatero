<?php 

 /*
	Template Name: Work Page
 */

get_header(); ?>

<?php get_header(); ?>

<div class="grid_12 omega clearfix">

  <?php 

  	$args = array(
  		'post_type' => 'work'
  		);

  	$the_query = new WP_Query( $args );
   ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
    <div class="grid_6 spotlight project" style="background-color: <?php the_field('background_color')?>">
      <a href="<?php the_permalink();?>">
        <img src="<?php the_field('home_page_slider_image');?>" alt="">
      </a>
      <h4>
        <a href="<?php the_permalink();?>">
          <?php the_title(); ?>  
        </a>
      </h4>

      <?php the_field('description') ?>

      <p>
        <a class="btn blue"  href="<?php the_permalink();?>" style="background-color: <?php the_field('button-color')?>">
          View Project &rarr;  
        </a>
      <p>
    </div>  
  
  <?php endwhile; else: ?>
    <p>There are no posts or pages</p>
  <?php endif; ?>

</div>

<?php get_footer();  ?>

