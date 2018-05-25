<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="container-shop-content">

				<div class="shop-title">
					<h2>SHOP STAFF</h2>
				</div>

				<?php
					$args = array( 'post_type' => 'product', 'posts_per_page' =>16, 'order' => 'ASC' );
					$product_posts = get_posts( $args ); // returns an array of posts
					?>
				<div class="item-grid">	

					<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

					<div class="shop-item" >

						<div class="item-image">
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a>
						</div>

						<div class= "item-info">	
							<h2 class="item-name"><?php the_title();?></h2> <h2 class="item-price"> <?php echo CFS()->get( 'price' ); ?> </h2>
						</div>	
						
						

					</div>
						<?php endforeach; wp_reset_postdata(); ?>
				</div>


			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>





<!-- <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header> .page-header 

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?> -->