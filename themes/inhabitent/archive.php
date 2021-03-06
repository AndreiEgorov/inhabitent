<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<section class="archive-page">

				<div class="archive-page-content">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								get_template_part( 'template-parts/content' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
			
				</div>

				<div class="sidebar">	
					<?php get_sidebar(); ?>
				</div>	

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_sidebar(); ?>
<?php get_footer(); ?>
