<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
?>	


		<?php get_header(); ?>


	
		<div id="primary" class="content-area shop-content">


		
			<main id="main" class="site-main" role="main">

				<div class="content-container">

					<div class="section-title shop">
						<h2><?php the_archive_title()?></h2>
					</div>

	<!-- fill up the grid with items -->
					<?php
						$args = array( 'post_type' => 'adventures', 'posts_per_page' =>16, 'order' => 'ASC' );
						$product_posts = get_posts( $args ); // returns an array of posts
						?>
					<div class="item-grid">	

						<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

						<div class="shop-item" >

							<div class="item-image">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a>
							</div>

							<div class= "item-info">	
								<h2 class="item-name"><?php the_title();?></h2> <span>..............................................................</span> <h2 class="item-price"> <?php echo CFS()->get( 'price' ) ; ?> </h2>
							</div>	
							
						</div>
							<?php endforeach; wp_reset_postdata(); ?>
					</div>


				</div>

			</main><!-- #main -->
		</div><!-- #primary -->

	

<?php get_footer(); ?>



