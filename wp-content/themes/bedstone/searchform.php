<?php
/**
 * searchform
 *
 * @package Bedstone
 */

$rand = rand(1000, 9999); // for id so we can use this multiple times on a page
?>
<div class="searchform hidden-print">
	<form role="search" class="navbar-form" method="get" action="<?php echo home_url('/'); ?>">
	    <div class="input-group">
	    	<input class="form-control" type="text" name="s" id="searchform-query-<?php echo $rand; ?>" placeholder="<?php _e('Search'); ?>" value="<?php echo get_search_query() ?>" title="<?php _e('Search'); ?>" />
	        <div class="input-group-btn">
	            <button class="btn btn-default" type="submit" title="<?php _e('Submit Search'); ?>"><i class="glyphicon glyphicon-search"></i></button>
	        </div>
	    </div>
	</form>
</div>
