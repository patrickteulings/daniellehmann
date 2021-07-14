<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php /* get_template_part('template-parts/footer/footer-widgets');*/ ?>

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="column">
    <div class="column__title">
      <h6 class="column-header">Menu</h6>
    </div>
    <?php if (has_nav_menu('footer')) : ?>
      <nav aria-label="<?php esc_attr_e('Secondary menu', 'daniellehmann'); ?>" class="footer-navigation">
        <ul class="footer-navigation-wrapper">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'items_wrap'     => '%3$s',
              'container'      => false,
              'depth'          => 1,
              'link_before'    => '<span>',
              'link_after'     => '</span>',
              'fallback_cb'    => false,
            )
          );
          ?>
        </ul><!-- .footer-navigation-wrapper -->
      </nav><!-- .footer-navigation -->
    <?php endif; ?>
  </div>
  <div class="column">
    <div class="column__title">
      <h6 class="column-header">Meteen contact</h6>
    </div>

    <nav aria-label="contact options" class="footer-navigation">
      <ul class="footer-navigation-wrapper related-items">
        <li class="menu-item phone"><a href="tel:+316123456">06123456</a></li>
        <li class="menu-item mail"><a href="mailto:daniel@daniellehmann.nl">daniel@daniellehmann.nl</a></li>
      </ul>
    </nav>
    <h6 class="subtitle">Locaties</h6>
    <nav aria-label="Locations" class="footer-navigation">
      <?php if (has_nav_menu('footer')) : ?> <nav aria-label="<?php esc_attr_e('Locations menu', 'daniellehmann'); ?>" class="footer-navigation">
          <ul class="footer-navigation-wrapper related-items">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'dl-locations-menu',
                'items_wrap'     => '%3$s',
                'container'      => false,
                'depth'          => 1,
                'link_before'    => '<span>',
                'link_after'     => '</span>',
                'fallback_cb'    => false,
              )
            );
            ?>
          </ul><!-- .footer-navigation-wrapper -->
        </nav><!-- .footer-navigation -->
      <?php endif; ?>
  </div>
  <div class="column">
    <div class="column__title">
      <h6 class="column-header">Gerelateerd</h6>
    </div>
    <?php if (has_nav_menu('footer')) : ?> <nav aria-label="<?php esc_attr_e('Related menu', 'daniellehmann'); ?>" class="footer-navigation">
        <ul class="footer-navigation-wrapper related-items">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'dl-related-items-menu',
              'items_wrap'     => '%3$s',
              'container'      => false,
              'depth'          => 1,
              'link_before'    => '<span>',
              'link_after'     => '</span>',
              'fallback_cb'    => false,
            )
          );
          ?>
        </ul><!-- .footer-navigation-wrapper -->
      </nav><!-- .footer-navigation -->
    <?php endif; ?>
  </div>
  <div class="presentation-circle">

    <?= file_get_contents(__DIR__ . '/assets/images/circle-large.svg'); ?>
  </div>
</footer><!-- #colophon -->
<div class="madeby">made with
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
  </svg> by <a href="https://www.patrickteulings.nl">patrickteulings</a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>