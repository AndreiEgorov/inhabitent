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
	<section class="content-container">
		
				<?php if ( has_post_thumbnail() ) : ?>
		<div class="product-image">
			<?php the_post_thumbnail( 'large' ); ?> 
		</div>
				<?php endif; ?>

		<div class="info-block">
			<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>	

			<div class="entry-content">
				<p class="price"> <?php echo CFS()->get( 'price' ); ?> </p>
				<p class="product-description"> <?php the_content(); ?> </p>		
			</div><!-- .entry-content -->
			
			<div class="social-buttons">
				<a href=""> <p class="button"> <i class="fab fa-facebook-f"></i> LIKE </p></a>
				<a href=""> <p class="button"> <i class="fab fa-twitter"></i> TWEET </p></a>
				<a href=""> <p class="button"> <i class="fab fa-pinterest"></i> PIN </p></a>
			</div>
		</div>

<?php endwhile; // End of the loop. ?>

</article>
				</main><!-- #main -->
			<!-- #primary -->
	</section>

<?php get_footer(); ?>


