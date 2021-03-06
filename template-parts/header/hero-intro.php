<?php

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Daniel Lehmann
 * @since Daniel Lehmann 1.0
 */
$maxTextLength = 400;
$in = get_field('hero_intro');
$out = strlen($in) > $maxTextLength ? substr($in, 0, $maxTextLength) . "..." : $in;
$hasReadMore = strlen($in) > $maxTextLength ? true . "..." : false;

/**
 * This read-more system
 * is hijacked by JS, please leave it though in case someone does not have JS,
 * or the user fogets to implement
 * the BREAK word
*/
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
  <div class="full" aria-hidden="false">
    <?php echo $in ?>
    <!-- <span class="read-less">
      <?php include(get_stylesheet_directory() . "/assets/images/icons/feather-icons/chevrons-left.svg"); ?>
    </span> -->
  </div>
  <span class="read-less">
      <?php include(get_stylesheet_directory() . "/assets/images/icons/feather-icons/chevrons-left.svg"); ?>
    </span>

</div>