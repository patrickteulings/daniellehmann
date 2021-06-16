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
$in = get_field('hero_intro');
$out = strlen($in) > 200 ? substr($in, 0, 200) . "..." : $in;
$hasReadMore = strlen($in) > 200 ? true . "..." : false;

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- Adds Image AND Title if it's a regular page, adds ONLY Image if it's the homepage -->
  <?php if (!is_front_page()) : ?>

    <header class="entry-header alignwide hero">
      <div class="hero__inner">
        <div class="hero-content">
          <?php get_template_part('template-parts/header/entry-header'); ?>
          <?php /* the_field('hero_intro');*/ ?>
          <div class="hero-content__intro">
            <p><?php echo $out ?>
              <?php if ($hasReadMore) : ?>
                <span class="read-more">
                  <?php include(get_stylesheet_directory() . "/assets/images/icons/feather-icons/chevrons-right.svg"); ?>
                </span>
              <?php endif; ?>
            </p>
          </div>
          <div class="wp-block-buttons">
            <?php if (get_field('hero_button_1_label')) : ?><div class="wp-block-button"><a href="<?php the_field('hero_button_2_link') ?>" class="wp-block-button__link"><?php the_field('hero_button_1_label') ?></a></div><?php endif; ?>
            <?php if (get_field('hero_button_2_label')) : ?><div class="wp-block-button <?php the_field('hero_button_2_icon') ?>"><a href="<?php the_field('hero_button_1_link') ?>" class="wp-block-button__link"><?php the_field('hero_button_2_label') ?></a></div><?php endif; ?>
          </div>
        </div>
        <div class="hero-image">
          <div class="hero-image__inner" style="background-image: url(<?= $featured_img_url; ?>);"></div>
        </div>
      </div>
    </header><!-- .entry-header -->
  <?php elseif (has_post_thumbnail()) : ?>
    <header class="entry-header alignwide">
      <?php daniellehmann_post_thumbnail(); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>

  <div class="entry-content">
    <?php
    the_content();

    wp_link_pages(
      array(
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'daniellehmann') . '">',
        'after'    => '</nav>',
        /* translators: %: Page number. */
        'pagelink' => esc_html__('Page %', 'daniellehmann'),
      )
    );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->