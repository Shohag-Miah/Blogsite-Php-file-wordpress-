<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url( '/' )) ?>">
	<div>
		<input type="text" class="search-input" placeholder="<?php the_search_query() ?>" value="" name="s" id="s">
		<button type="submit" class="search-action" name=""  id="searchsubmit"><i class="las la-search"></i></button>
	</div>
</form>

