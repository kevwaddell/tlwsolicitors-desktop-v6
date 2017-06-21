<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <label class="sr-only" for="s">Search</label>
  <input type="search" value="<?php the_search_query(); ?>" placeholder="Search…" class="form-control search-query" name="s" id="s" />
  <button type="submit" id="searchsubmit" class="search-submit caps" />Start Search</button>
</form>	