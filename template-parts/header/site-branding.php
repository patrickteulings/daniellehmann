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
      <span></span><span></span><span></span>
    </button>
    <div class="navigation-presentation-circle">
      <?php require_once(__DIR__ . '/../../assets/images/circle-large.svg'); ?>
    </div>
  </div>

  <div class="fullscreen-navigation" aria-hidden="true">
    <?php if (has_nav_menu('primary')) : ?>
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

  </div>
</span>