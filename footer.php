<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- <div class="wrapper" id="wrapper-footer">

	<div class="<?php // echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php// understrap_site_info(); ?>

					</div>.site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	<div class="my-footer">
		<div class="container">
			<div class="footer-content">
				<div class="footer-logo">
					<h1>Baraka Elias</h1>
				</div>
				<div class="copyright"><i class="fa fa-copyright"></i>Copyright 2022. All Rights Reserved</div>
				<div class="socials">
					12
				</div>
			</div>
		</div>
	</div>

</div><!--wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

