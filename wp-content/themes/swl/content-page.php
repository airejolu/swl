<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package swl
 * @since swl 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<hgroup class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</hgroup><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'swl' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'swl' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
