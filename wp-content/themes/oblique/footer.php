<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Oblique
 */
?>

		</div>
	</div><!-- #content -->

	<?php do_action( 'oblique_footer_svg' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<!-- <?php do_action( 'oblique_footer' ); ?> -->
			<p>Created by Ingrid Hawkins 2017</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
