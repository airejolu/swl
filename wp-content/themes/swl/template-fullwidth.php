<?php
/**
 *
 * Template Name: fullwidth template
 *
 * @package swl
 * @since swl 1.0
 */

get_header(); ?>
<div class="row">
	
	<div class="twelve columns">
	
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>


			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
		
	</div><!--/twelve columns -->

</div><!--/row -->
<?php get_footer(); ?>