<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<article class="entry">
  <header class="page-header alignwide hero">
    <div class="hero__inner">
      <div class="hero-content">

        <div class="hero__title--mini">404</div>
        <div class="hero__title">
          <p>Hi! De pagina die je zocht,
          <h1>bestaat helaas niet.</h1>
          <p>probeer via het menu de juiste pagina te vinden of gebruik de zoekoptie!</p>
        </div>
        <?php get_template_part('template-parts/header/hero-404'); ?>
      </div>
      <div class="hero-image">
        <div class="hero-image__inner js-hero-image" data-image="<?= get_stylesheet_directory_uri() . '/assets/images/static/page-404-hero.jpg'; ?>"></div>
      </div>
    </div>
  </header><!-- .page-header -->
</article>

<?php
get_footer();
