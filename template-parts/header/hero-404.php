<?php

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$maxTextLength = 400;
$in = get_field('hero_intro');
$out = strlen($in) > $maxTextLength ? substr($in, 0, $maxTextLength) . "..." : $in;
$hasReadMore = strlen($in) > $maxTextLength ? true . "..." : false;

?>

<div class="hero-content__intro" data-module="readmore" data-config='{"toggleTrigger":".read-more", "toggleLessTrigger":".read-less"}' data-fulltext='<?= $in ?>'>
  <?php get_search_form(); ?>
</div>