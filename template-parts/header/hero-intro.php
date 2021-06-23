<?php

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$in = get_field('hero_intro');
$out = strlen($in) > 200 ? substr($in, 0, 200) . "..." : $in;
$hasReadMore = strlen($in) > 200 ? true . "..." : false;

?>

<div class="hero-content__intro" data-module="readmore" data-config='{"toggleTrigger":".read-more", "toggleLessTrigger":".read-less"}' data-fulltext='<?= $in ?>'>
  <div class="excerpt">
    <?php echo $out ?>
    <?php if ($hasReadMore) : ?>
      <span class="read-more">
        <?php include(get_stylesheet_directory() . "/assets/images/icons/feather-icons/chevrons-right.svg"); ?>
      </span>
    <?php endif; ?>
  </div>
  <div class="full" aria-hidden="true">
    <?php echo $in ?>
    <span class="read-less">
      <?php include(get_stylesheet_directory() . "/assets/images/icons/feather-icons/chevrons-left.svg"); ?>
    </span>
  </div>
</div>