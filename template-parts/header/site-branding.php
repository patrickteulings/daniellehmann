<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo('name');
$description  = get_bloginfo('description', 'display');
$show_title   = (true === get_theme_mod('display_title_and_tagline', true));
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if (has_custom_logo() && $show_title) : ?>
  <div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<div class="site-branding">
  <?php if (has_custom_logo() && !$show_title) : ?>
    <!-- <div class="site-logo"><?php the_custom_logo(); ?></div> -->
  <?php endif; ?>

  <?php if ($blog_info) : ?>
    <?php if (is_front_page() && !is_paged()) : ?>
      <!-- <h1 class="<?php echo esc_attr($header_class); ?>"><?php echo esc_html($blog_info); ?></h1> -->
    <?php elseif (is_front_page() || is_home()) : ?>
      <!-- <h1 class="<?php echo esc_attr($header_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></h1> -->
    <?php else : ?>
      <!-- <p class="<?php echo esc_attr($header_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></p> -->
    <?php endif; ?>
  <?php endif; ?>

  <?php if ($description && true === get_theme_mod('display_title_and_tagline', true)) : ?>
    <!-- <p class="site-description">
      <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput
      ?>
    </p> -->
  <?php endif; ?>
</div><!-- .site-branding -->

<span data-module="toggle" data-config='{"toggleTrigger": ".hamburger", "toggleTarget": ".fullscreen-navigation", "activeClass":"is-open"}'>
  <div class="navigation-trigger-wrapper">
    <button class="hamburger" aria-controls="fullscreen-navigation">
      <span></span><span></span><span></span><span></span><span></span>
    </button>
    <div class="navigation-presentation-circle">
      <?php require_once(__DIR__ . '/../../assets/images/circle-large.svg'); ?>
    </div>
  </div>

  <div class="fullscreen-navigation" aria-hidden="true">
    <?php if (has_nav_menu('primary')) : ?>
      <div class="fullscreen-navigation__content">
        <nav id="fullscreen-navigation" class="fullscreen-navigation__nav" role="navigation" aria-label="fullscreen-navigation">
          <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'menu_class'      => 'menu-wrapper',
              'container_class' => 'primary-menu-container',
              'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
              'fallback_cb'     => false,
            )
          );
          ?>
        </nav><!-- #site-navigation -->
      <?php endif; ?>


      <div class="socials">
        <div class="social__item">
          <a href="">
            <figure class="social__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg></figure><span class="screen-reader-text">facebook</span>
          </a>
        </div>
        <div class="social__item">
          <a href="">
            <figure class="social__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg></figure><span class="screen-reader-text">twitter</span>
          </a>
        </div>
        <div class="social__item">
          <a href="">
            <figure class="social__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                <rect x="2" y="9" width="4" height="12"></rect>
                <circle cx="4" cy="4" r="2"></circle>
              </svg></figure><span class="screen-reader-text">linkedin</span>
          </a>
        </div>
      </div>
      </div>
  </div>
</span>