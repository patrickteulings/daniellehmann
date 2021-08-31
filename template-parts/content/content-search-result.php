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
  <div class="search-result__title">
  <?php the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
  </div>
  <div class="search-result__content">
    <div class="search-result__background-image" style="background-image: url(<?php the_post_thumbnail_url('post-thumbnail', array('loading' => false)); ?>)"></div>
    <div class="search-result__text">
      <?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
    </div><!-- .entry-content -->
  </div>
</article><!-- #post-${ID} -->