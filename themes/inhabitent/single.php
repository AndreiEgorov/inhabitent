<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="single-page">

				<div class="single-post">
						<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

						<div class="social-buttons">
				<a href=""> <p class="button"> <i class="fab fa-facebook-f"></i> LIKE </p></a>
				<a href=""> <p class="button"> <i class="fab fa-twitter"></i> TWEET </p></a>
				<a href=""> <p class="button"> <i class="fab fa-pinterest"></i> PIN </p></a>
			</div>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
				</div>

				
				<div class="sidebar">	
					<?php get_sidebar(); ?>
				</div>	

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
