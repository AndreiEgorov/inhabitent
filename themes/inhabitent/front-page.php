<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<body class="homepage-template-default">

		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-banner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-full.svg"  alt="Inhabitent Logo" />	
			</div>	


<!-- Shop stuff code to replace markup-->
<div class="content-container">

	<section class="shop-stuff">
		<div class="section-title">
			<h2> Shop Stuff</h2>
		</div>
		
		<div class="shop-stuff-box-set">
			<?php
			$terms = get_terms(array(
				'taxonomy' => "product_type",
				'hide_empty' => 0,
			));
			//d($terms);
			if(!empty($terms) && ! is_wp_error( $terms )) :
			 ?>

			<?php foreach ( $terms as $term ) : ?>

				<div class="shop-stuff-box">
					<img src="<?php echo get_template_directory_uri() .'/assets/images/product-type-icons/' . $term->slug; ?>.svg" class="stuff-box-icon" alt="<?php echo $term->name; ?>"/ >
					<p><?php echo $term->description; ?></p>

					<p>
						<a href="<?php echo get_term_link( $term ); ?>" class="btn"> <?php echo $term->name; ?> Stuff </a>
					</p>

				</div>

				<?php endforeach; ?>	
				
			<?php endif; ?>	
		</div>

	</section>

				


				<div class="inhabitent-journal-container">
				
					<div class="section-title">
						<h2>INHABITENT JOURNAL</h2>
					</div>

				<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' =>3, 'order' => 'DESC' );
					$product_posts = get_posts( $args ); // returns an array of posts
					?>
				<div class="set-of-article-boxes">				
					<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
					<div class="journal-article" >

						<div class="journal-article-image">
							<?php the_post_thumbnail(); ?>
						</div>

						<div class= "journal-article-info">
							<p class="article-meta"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p> 			
							<h2 class="journal-article-title"><?php the_title();?> </h2>
							<a href="<?php the_permalink();?>" class="btn-transparent">READ ENTRY</a>
						</div>	

					</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>

				</div>



				<div class="adventures-container">

					<div class="section-title">
						<h2>LATEST ADVENTURES</h2>
					</div>

					<ul class="adventure-stories">

						<li class="story-box box1">

							<h3 class="story-title"></h3>
							<form action="#">
									<input type="submit" value="READ MORE">
							</form>

						</li>


						<li class="story-box box2">

							<h3 class="story-title"></h3>
							<form action="#">
									<input type="submit" value="READ MORE">
							</form>

						</li>

						<li class="story-box box3">
							
							<h3 class="story-title"></h3>
							<form action="#">
									<input type="submit" value="READ MORE">
							</form>

						</li>

						<li class="story-box box4">

							<h3 class="story-title"></h3>
							<form action="#">
									<input type="submit" value="READ MORE">
							</form>

						</li>
						
					</ul>

					<p>
						<a href="#" class="btn-more-adventures">MORE ADVENTURES</a>
					</p>


				</div>

			</main><!-- #main -->
		</div><!-- #primary -->

	</body>
</div>

<?php get_footer(); ?>
