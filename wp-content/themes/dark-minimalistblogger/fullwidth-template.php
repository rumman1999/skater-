<?php
/**
 * Template Name: Full Width Page
 *
 * @package dark-Minimalistblogger
 * @subpackage dark-minimalistblogger
 * @since dark-Minimalistblogger 1.0
 */

get_header(); ?>

	<div id="primary" class="fullwidth-template featured-content content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
