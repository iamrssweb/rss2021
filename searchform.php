<?php
/**
 * Form for the search input, so we can then style it all up...
 */
?>
<form method="get" action="<?php bloginfo('home'); ?>">
    <input type="search" id="s" name="s" placeholder="Search Here...." value="<?php get_search_query(); ?>">
    <input type="submit" id="btn-search" value="">
</form>