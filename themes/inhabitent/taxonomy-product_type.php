<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="content-container">
		
					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header>

				<?php if ( have_posts() ) : ?>

					<ul class="item-grid-small">	
						<?php while ( have_posts() ) : the_post(); ?>
								
							<li class="shop-item">

									<div class="item-image">
										<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a>
									</div>

									<div class= "item-info">	
										<h2 class="item-name"><?php the_title();?></h2> <span>..............................................................</span> <h2 class="item-price"> <?php echo CFS()->get( 'price' ) ; ?> </h2>

									</div>	
								
							</li>

						<?php endwhile; ?>

					</ul>	

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
