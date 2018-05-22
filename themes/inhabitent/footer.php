<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container"> 
					<div class="contact-info block" >
						<h3>CONTACT INFO</h3>
						<p>info@inhabitent.com</p>
						<p>778-456-7891</p>
						<div class="fa-icons">

						</div>
					</div>

					<div class="business-hours block">
						<h3>BUSINESS HOURS</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>

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
