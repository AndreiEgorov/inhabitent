<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
       
		<?php while ( have_posts() ) : the_post(); ?>

            
            



<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		

	<div class="entry-content">
        <?php echo CFS()->get( 'price' ); ?>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	



		<?php endwhile; // End of the loop. ?>
		</article>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


