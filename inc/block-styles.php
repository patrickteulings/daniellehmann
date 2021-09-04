<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (function_exists('register_block_style')) {
  /**
   * Register block styles.
   *
   * @since Twenty Twenty-One 1.0
   *
   * @return void
   */
  function daniellehmann_register_block_styles()
  {
    // Columns: Overlap.
    register_block_style(
      'core/columns',
      array(
        'name'  => 'twenty-twenty-one-columns-overlap',
        'label' => esc_html__('Overlap', 'daniellehmann'),
      )
    );

    // Cover: Borders.
    register_block_style(
      'core/cover',
      array(
        'name'  => 'twenty-twenty-one-border',
        'label' => esc_html__('Borders', 'daniellehmann'),
      )
    );

    // Group: Borders.
    register_block_style(
      'core/group',
      array(
        'name'  => 'twenty-twenty-one-border',
        'label' => esc_html__('Borders', 'daniellehmann'),
      )
    );

    // Image: Borders.
    register_block_style(
      'core/image',
      array(
        'name'  => 'twenty-twenty-one-border',
        'label' => esc_html__('Borders', 'daniellehmann'),
      )
    );

    // Image: Frame.
    register_block_style(
      'core/image',
      array(
        'name'  => 'twenty-twenty-one-image-frame',
        'label' => esc_html__('Frame', 'daniellehmann'),
      )
    );

    // Latest Posts: Dividers.
    register_block_style(
      'core/latest-posts',
      array(
        'name'  => 'twenty-twenty-one-latest-posts-dividers',
        'label' => esc_html__('Dividers', 'daniellehmann'),
      )
    );

    // Latest Posts: Borders.
    register_block_style(
      'core/latest-posts',
      array(
        'name'  => 'twenty-twenty-one-latest-posts-borders',
        'label' => esc_html__('Borders', 'daniellehmann'),
      )
    );


    // Buttons: Button type & icons
    register_block_style(
      'core/button',
      array(
        'name'  => 'daniellehmann-button-phone',
        'label' => esc_html__('Phone', 'daniellehmann'),
      )
    );

    // Buttons: Button type & icons
    register_block_style(
      'core/button',
      array(
        'name'  => 'daniellehmann-button-phone-outlined',
        'label' => esc_html__('Phone outlined', 'daniellehmann'),
      )
    );

    // Buttons: Button type & icons
    register_block_style(
      'core/button',
      array(
        'name'  => 'daniellehmann-button-default',
        'label' => esc_html__('Default', 'daniellehmann'),
      )
    );

    // Buttons: Button type & icons
    register_block_style(
      'core/button',
      array(
        'name'  => 'daniellehmann-button-default-outlined',
        'label' => esc_html__('Default outlined', 'daniellehmann'),
      )
    );

    // Media & Text: Borders.
    register_block_style(
      'core/media-text',
      array(
        'name'  => 'twenty-twenty-one-border',
        'label' => esc_html__('Borders', 'daniellehmann'),
      )
    );

    // Separator: Thick.
    register_block_style(
      'core/separator',
      array(
        'name'  => 'twenty-twenty-one-separator-thick',
        'label' => esc_html__('Thick', 'daniellehmann'),
      )
    );

    // Social icons: Dark gray color.
    register_block_style(
      'core/social-links',
      array(
        'name'  => 'twenty-twenty-one-social-icons-color',
        'label' => esc_html__('Dark gray', 'daniellehmann'),
      )
    );
  }
  add_action('init', 'daniellehmann_register_block_styles');
}
