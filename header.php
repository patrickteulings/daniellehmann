<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php daniellehmann_the_html_classes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,100;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200&display=swap" rel="stylesheet">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script> -->
  <style>
    .top {
      position: fixed;
      top: 40px;
      left: 10px;
      color: white;
      z-index: 8000;
    }
  </style>
</head>

<!-- GET THE PAGE'S (ACF) THEME COLOR CLASSNAME -->
<?php
$field = get_field_object('page_color');
$value = $field['value'];
?>

<body <?php body_class($value); ?>>

  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'daniellehmann'); ?></a>

    <?php get_template_part('template-parts/header/site-header'); ?>

    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">