<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-result-block'); ?>>
  <div class="search-result__image">
  <?php
  the_title(sprintf('<h2 class="entry-title default-max-width"><a href="%s">', esc_url(get_permalink())), '</a></h2>');
  daniellehmann_post_thumbnail();
  ?>
  </div>
  <div class="search-result__content entry-content">
    <?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
  </div><!-- .entry-content -->
</article><!-- #post-${ID} -->