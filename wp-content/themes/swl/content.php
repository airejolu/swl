<?php
/**
 * @package swl
 * @since swl 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="two columns">
		
			<div class="post-meta">
			
				<div class="author clearfix">				
					<div class="author-img">
						<?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
					</div><!--/author -->
					
					<div class="author-name">
						<?php the_author(); ?>
					</div><!--/author-name -->
				</div><!--/author -->
				
				<div class="the-cat">
					<?php the_category(); ?>
				</div>
				
				<time><?php the_date(); ?></time>
				
			</div><!--/post-meta -->
		
		</div><!--/two columns -->
		
		<div class="ten columns">
		
			<header>
				<?php if ( is_singular() ) { ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } else { ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Link to %s', 'swl' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php } //end if/else ?>
			</header>
		
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				
				<div class="featured-img-small">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
				</div><!--/featured-image -->
				
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			
			<div class="featured-img">
				<?php the_post_thumbnail(); ?>
			</div><!--/featured-image -->
			
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'swl' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'swl' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			
			<?php endif; ?>
		
			<footer class="entry-meta">
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( __( ', ', 'swl' ) );
						if ( $categories_list && swl_categorized_blog() ) :
					?>
					<span class="cat-links">
						<?php printf( __( 'Posted in %1$s', 'swl' ), $categories_list ); ?>
					</span>
					<?php endif; // End if categories ?>
		
					<?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list( '', __( ', ', 'swl' ) );
						if ( $tags_list ) :
					?>
					<span class="sep"> | </span>
					<span class="tag-links">
						<?php printf( __( 'Tagged %1$s', 'swl' ), $tags_list ); ?>
					</span>
					<?php endif; // End if $tags_list ?>
				<?php endif; // End if 'post' == get_post_type() ?>
		
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="sep"> | </span>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'swl' ), __( '1 Comment', 'swl' ), __( '% Comments', 'swl' ) ); ?></span>
				<?php endif; ?>
		
				<?php edit_post_link( __( 'Edit', 'swl' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
			
		</div><!--/ten -->
	</div><!--/row -->
	
</article><!-- #post-<?php the_ID(); ?> -->
