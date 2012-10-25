<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package swl
 * @since swl 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="twelve columns">
			
				<div class="site-info">
				
					<a class="foot-logo" href="/" title="So Worth Loving"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/swl-logo-small.png" alt="So Worth Loving | Heart Diamond" /></a><br />
				
					<?php do_action( 'swl_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'swl' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'swl' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( '%1$s by %2$s.', 'swl' ), 'swl', '<a href="http://jarederickson.com/" rel="designer">Jared Erickson</a>' ); ?>
				</div><!-- .site-info -->
				
			</div><!--/twelve -->
		</div><!--/row -->
	</footer><!-- #colophon .site-footer -->
	
	
</div><!-- #page .hfeed .site .container -->

<?php wp_footer(); ?>

</body>
</html>