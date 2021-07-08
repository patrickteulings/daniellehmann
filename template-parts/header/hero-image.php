<?php

/**
 * Displays the HERO image - which is loaded with JS
 *
 * @since Daniel Lehmann 1.0
 */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="hero-image">
  <div class="hero-image__inner js-hero-image" data-image="<?= $featured_img_url; ?>"></div>
</div>