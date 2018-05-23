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

<section class="shop-stuff">
	<div class="section-title">
		<h2> Shop Stuff</h2>
	</div>
	
	<?php
	$terms = get_terms(array(
		'taxonomy' => "product_type",
		'hide_empty' => 0,
	));
	//d($terms);
	if(!empty($terms) && ! is_wp_error( $terms )) : ?>

	

			<?php foreach ( $terms as $term ) : ?>


				<div class="shop-stuff-box">
					<img src="<?php echo get_template_directory_uri() .'/assets/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>"/ >
					<p><?php echo $term->description; ?></p>

					<p>
						<a href="<?php echo get_term_link( $term ); ?>" class="btn"> <?php echo $term->name; ?> Stuff </a>
					</p>

				</div>

			<?php endforeach; ?>
	
		
	<?php endif; ?>	
</section>

			<!-- <div class="shop-stuff">
				
				<div class="section-title">
					<h2>SHOP STUFF</h2>
				</div>

				<div class="shop-stuff-box">
					<img  class="stuff-box-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/do.svg"  alt="Map Image" />
					<p class="stuff-box-text"> Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>	
					<form action="#">
						<input type="submit" value="DO STUFF" />
					</form>
				</div>

				<div class="shop-stuff-box">
					<img  class="stuff-box-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/eat.svg"  alt="Map Image" />
					<p class="stuff-box-text">Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
					<form action="#">
						<input type="submit" value="EAT STUFF"/>
					</form>
				</div>

				<div class="shop-stuff-box">
					<img  class="stuff-box-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/sleep.svg"  alt="Map Image" />
					<p class="stuff-box-text">Get a good night's rest in the wild in a home away from home that travels well.</p>
					<form action="#">
						<input type="submit" value="SLEEP STUFF">
					</form>
				</div>

				<div class="shop-stuff-box">
					<img  class="stuff-box-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/product-type-icons/wear.svg"  alt="Map Image" />
					<p class="stuff-box-text">From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
					<form action="#">
						<input type="submit" value="WEAR STUFF">
					</form>
				</div>

			</div> -->





			<div class="inhabitent-journal-container">
				<div class="div">
			<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' =>2, 'order' => 'ASC' );
				$product_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				<h2 clr><?php the_title(); ?> </h2>
				<?php the_meta(); ?>
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
				
				<?php the_post_thumbnail(); ?>
				
				<?php endforeach; wp_reset_postdata(); ?>

</div>

				<!-- <div class="section-title">
					<h2>INHABITENT JOURNAL</h2>
				</div>

				<ul class="article-set">
					<li class="journal-article">
						<div class="journal-article-image"></div>

						<div class="journal-article-info">
							<p class="article-meta-data"> test 1</p>
							<h3 class="article-title">MY ARTICLE</h3>
							<form action="#">
								<input type="submit" value="READ ENTRY">
							</form>

						</div>

					</li>
					<li class="journal-article">
						<div class="journal-article-image"></div>

						<div class="journal-article-info">
							<p class="article-meta-data"> test 2 </p>
							<h3 class="article-title">THIS ARTICLE</h3>
							<form action="#">
								<input type="submit" value="READ ENTRY">
							</form>

						</div>
					</li>
					<li class="journal-article">
						<div class="journal-article-image"></div>

						<div class="journal-article-info">
							<p class="article-meta-data"> test 3 </p>
							<h3 class="article-title"> THAT ARTICLE</h3>
							<form action="#">
								<input type="submit" value="READ ENTRY">
							</form>

						</div>
					</li>
				</ul>	 -->

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

				<form action="#" id="more-adventures-btn">
						<input type="submit" value="MORE ADVENTURES">
				</form>


			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</body>

<!-- <?php get_sidebar(); ?> 
<?php get_footer(); ?>
