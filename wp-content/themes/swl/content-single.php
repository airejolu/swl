<?php
/**
 * @package swl
 * @since swl 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="ten columns offset-by-two">
			<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
		</div><!--/ten -->
	</div><!-- /row -->

	<div class="row">
		<div class="two columns">
		
			<div class="post-meta">
			
				<div class="the-cat hide-for-small">
					<?php the_category( '', TRUE); ?>
				</div>			
			
				<div class="author clearfix">				
					<div class="author-img">
						<?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
					</div><!--/author -->
					
					<div class="author-name">
						<?php the_author(); ?>
					</div><!--/author-name -->
				</div><!--/author -->
				
				<div class="hide-for-small">					
					
					<time>
						<?php the_date(); ?>
					</time>						
					
					<div class="comments-link">
						<?php comments_popup_link( __( '0 comments', 'swl' ), __( '1 comment', 'swl' ), __( '% comments', 'swl' ) ); ?>
					</div>
					
					<div class="the-tags">
						<?php the_tags(); ?>
					</div>
				</div><!--/hide-for-mobile -->
			</div><!--/post-meta -->
		
		</div><!--/two columns -->
		
		<div class="ten columns">
		
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				
				<div class="featured-img-small">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</a>
				</div><!--/featured-image -->
				
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			
			<div class="featured-img">
				<a class="post-img-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div><!--/featured-image -->
			
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'swl' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'swl' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			
			<?php endif; ?>
		
			<footer class="author-meta">	

				
			</footer><!-- .author-meta -->
			
		</div><!--/ten -->
	</div><!--/row -->
	
</article><!-- #post-<?php the_ID(); ?> -->
