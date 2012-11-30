<?php
/**
 * Template to display authors bio info on posts
 *
 * @package swl
 * @since swl 1.1
 */
 ?>
 
<div class="row">
	<div class="ten columns offset-by-two">
	
	<h5 class="title-break"><span>About the Author</span></h5>

		<div class="author-bio clearfix">
		
			 	
				<div class="author-img">
				<?php echo get_avatar( get_the_author_meta('ID'), 120 ); ?>
				</div><!--/author -->
			
			<?php //get some user info 
			
				 $user =  get_the_author_meta('ID');
				 $curauth = get_userdata( $user );
				 
				 $website = $curauth->user_url;
				 $facebook = $curauth->facebook;
				 $twitter = $curauth->twitter;
			
			 ?>
			 
			<div class="author-info">	
				<ul class="link-list">
						<li><h6 class="author-name"><?php the_author(); ?></h6></li>
					<?php if ($website != '') { ?>
						<li><a class="auth-site" href="<?php echo $website; ?>" title="<?php the_author(); ?>'s site">website</a></li>
					<?php } //endif ?>
					<?php if ($facebook != '') { ?>
						<li><a class="auth-facebook" href="<?php echo $facebook; ?>" title="<?php the_author(); ?> facebook">facebook</a></li>
					<?php } //endif ?>
					<?php if ($twitter != '') { ?>
						<li><a class="auth-twitter" href="<?php echo $twitter; ?>" title="<?php the_author(); ?> twitter">twitter</a></li>
					<?php } //endif ?>
				</ul>
				<p><?php the_author_description(); ?></p>
			</div><!--/author-info -->
		
		</div><!--/author-bio -->
	</div><!-- ten offset -->
</div><!--/row -->