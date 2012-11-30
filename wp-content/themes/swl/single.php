<?php
/**
 * The Template for displaying all single posts.
 *
 * @package swl
 * @since swl 1.0
 */

get_header(); ?>

<div class="row">
	
	<div class="nine columns">
	
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>
				
				<?php get_template_part( 'author', 'bio' ); ?>

				<?php swl_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>


			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
		
	</div><!--/eight columns -->

<?php get_sidebar(); ?>

</div><!--/row -->
<?php get_footer(); ?>