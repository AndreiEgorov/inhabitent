<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container"> 
					<div class="contact-info block" >
						<h3>CONTACT INFO</h3>
						<p><i class="far fa-envelope"></i> <a href="info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"></i> <a href="tel:7784567891">778-456-7891</a></p>
						<div class="fa-icons">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-google-plus-square"></i>
						</div>
					</div>

					<div class="business-hours block">
						<h3>BUSINESS HOURS</h3>
						<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
						<p><strong>Saturday:</strong> 10am to 2pm</p>
						<p><strong>Sunday:</strong> Closed</p>
				
					</div>

					<div class="logo3 block">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-text.svg"  alt="Inhabitent Logo" />
					</div>

					<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'COPYRIGHT &copy;2017 INHABITENT' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->

				</div>

				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
