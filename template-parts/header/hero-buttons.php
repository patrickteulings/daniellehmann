<?php

/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$buttonOneHasCustomLink = get_field('button_1_is_custom_link');
$linkButtonOne = ($buttonOneHasCustomLink == 'true') ? get_field('button_1_custom_link') : get_field('hero_button_1_link');

$buttonTwoHasCustomLink = get_field('button_2_is_custom_link');
$linkButtonTwo = ($buttonTwoHasCustomLink == 'true') ? get_field('button_2_custom_link') : get_field('hero_button_2_link');
?>

<div class="wp-block-buttons">
  <?php if (get_field('hero_button_1_label')) : ?><div class="wp-block-button <?php the_field('hero_button_1_icon') ?>"><a href="<?= $linkButtonOne ?>" class="wp-block-button__link"><?php the_field('hero_button_1_label') ?></a></div><?php endif; ?>
  <?php if (get_field('hero_button_2_label')) : ?><div class="wp-block-button <?php the_field('hero_button_2_icon') ?>"><a href="<?= $linkButtonTwo ?>" class="wp-block-button__link"><?php the_field('hero_button_2_label') ?></a></div><?php endif; ?>
</div>