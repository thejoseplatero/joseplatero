<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
			<?php 

				wp_title('-', true, 'right');
				bloginfo( 'name' );

			 ?>

		</title>
		<?php wp_head(); ?>
	</head>
	<body>

		<p>This is the header</p>

		<?php 
		    $args = array(
		        'menu' => 'main-menue'
		      );

		    wp_nav_menu( $args);
		?>
