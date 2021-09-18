<?php

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="hero__title--mini"><?= the_title(); ?></div>
<div class="hero__title"><?= get_field('page_title'); ?></div>

<?php
