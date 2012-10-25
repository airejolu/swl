<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package swl
 * @since swl 1.0
 */

get_header(); ?>

<div class="row">
	
	<div class="nine columns">
	
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'You Searched For: %s', 'swl' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php swl_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php swl_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
		
	</div><!--/eight columns -->

<?php get_sidebar(); ?>

</div><!--/row -->
<?php get_footer(); ?>