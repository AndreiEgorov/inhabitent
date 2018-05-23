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

			<div class="shop-stuff">
				
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

			</div>

			<div class="inhabitent-journal-container">

				<div class="section-title">
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
				</ul>	

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
