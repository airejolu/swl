<?php
/**
 * The template for displaying search forms in swl
 *
 * @package swl
 * @since swl 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="row">
	  <div class="twelve columns">
	    <div class="row collapse">
	      <div class="eight mobile-three columns">
	      	<label for="s" class="assistive-text"><?php _e( 'Search', 'swl' ); ?></label>
	      	<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'swl' ); ?>" />
	      </div>
	      <div class="four mobile-one columns">
	      	<input type="submit" class="postfix button expand" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'swl' ); ?>" />
	      </div>
	    </div>
	  </div>
	</div>		
</form>
