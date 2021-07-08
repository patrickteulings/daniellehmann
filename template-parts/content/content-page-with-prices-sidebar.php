<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php
/*
*  Get the Feature image
*/
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- Adds Image AND Title if it's a regular page, adds ONLY Image if it's the homepage -->
  <?php if (!is_front_page()) : ?>

    <header class="entry-header alignwide hero">
      <div class="hero__inner">
        <div class="hero-content">
          <?php get_template_part('template-parts/header/entry-header'); ?>
          <?php get_template_part('template-parts/header/hero-intro'); ?>
          <div class="wp-block-buttons">
            <?php if (get_field('hero_button_1_label')) : ?><div class="wp-block-button"><a href="<?php the_field('hero_button_2_link') ?>" class="wp-block-button__link"><?php the_field('hero_button_1_label') ?></a></div><?php endif; ?>
            <?php if (get_field('hero_button_2_label')) : ?><div class="wp-block-button <?php the_field('hero_button_2_icon') ?>"><a href="<?php the_field('hero_button_1_link') ?>" class="wp-block-button__link"><?php the_field('hero_button_2_label') ?></a></div><?php endif; ?>
          </div>
        </div>
        <?php get_template_part('template-parts/header/hero-image'); ?>
      </div>
    </header><!-- .entry-header -->
  <?php elseif (has_post_thumbnail()) : ?>
    <header class="entry-header alignwide">
      <?php daniellehmann_post_thumbnail(); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>

  <div class="entry-content entry-content-light">
    <div class="content-prices-wrapper">
      <?php the_content(); ?>
      <!-- <aside class="aside-prices">
        <h2>Tarieven</h2>
        <div class="prices-wrapper">
          <div class="prices-block">
            <h4>Proefles</h4>
            <div class="prices-block__content">
              <div class="desc">
                <p>Een proefles is altijd gratis als je besluit door te gaan</p>
              </div>
              <div class="price">€0 / 15,-</div>
            </div>
          </div>
          <div class="prices-block">
            <h4>Groepsles</h4>
            <div class="prices-block__content">
              <div class="desc">
                <p>Een proefles is altijd gratis als je besluit door te gaan</p>
              </div>
              <div class="price">€0 / 15,-</div>
            </div>
          </div>
          <div class="prices-block">
            <h4>Individuele les</h4>
            <div class="prices-block__content">
              <div class="desc">
                <p>Een proefles is altijd gratis als je besluit door te gaan</p>
              </div>
              <div class="price">€0 / 15,-</div>
            </div>
          </div>
          <div class="prices-action">
            <div class="wp-block-buttons">
              <div class="wp-block-button"><a href="http://daniellehman.local/?page_id=3" class="wp-block-button__link">Proefles of inschrijven</a></div>
            </div>
          </div>
          <div class="image-wrapper">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/holding-electric-bass.jpg" alt="young man holding electric bass" />
          </div>
        </div>
        <div class="review-wrapper">
          <div class="quotation-mark" role="display">&ldquo; </div>
          <blockquote>Onze zoon Erik van 7 heeft echt grote sprongen gemaakt bij Daniël, maar nog belangrijker, hij heeft het echt heel leuk gehad!</blockquote>
        </div>
      </aside> -->
    </div>

  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->