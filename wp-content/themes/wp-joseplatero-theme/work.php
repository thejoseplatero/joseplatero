<?php 

 /*
	Template Name: Work Page
 */

get_header(); ?>

<?php get_header(); ?>

<p>This is the work.php file</p>

<?php 

	$args = array(
		'post_type' => 'work'
		);

	$the_query = new WP_Query( $args );
 ?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
  <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
  <?php the_field( 'description' ); ?>
  <hr>

<?php endwhile; else: ?>
  <p>There are no posts or pages</p>
<?php endif; ?>

<?php get_footer();  ?>