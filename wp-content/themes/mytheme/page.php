<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mytheme
 */

get_header();
?>
<div id="contents">
		<div class="clearfix">
			<?php
		while ( have_posts() ) :
			the_post();
     		 mytheme_post_thumbnail();
			 the_title( '<h1 class="entry-title">', '</h1>' ); 
			 the_content();
			

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
		</div>
	</div>

	<main id="primary" class="site-main">

		

<?php

get_footer();
?>