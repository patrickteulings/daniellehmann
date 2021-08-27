<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
  require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('daniellehmann_setup')) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @since Twenty Twenty-One 1.0
   *
   * @return void
   */
  function daniellehmann_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'daniellehmann' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('daniellehmann', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
    add_theme_support('title-tag');

    /**
     * Add post-formats support.
     */
    add_theme_support(
      'post-formats',
      array(
        'link',
        'aside',
        'gallery',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
      )
    );

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(
      array(
        'primary' => esc_html__('Primary menu', 'daniellehmann'),
        'footer'  => __('Secondary menu', 'daniellehmann'),
      )
    );

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
      'html5',
      array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
      )
    );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
      'custom-logo',
      array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
      )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for editor styles.
    add_theme_support('editor-styles');
    $background_color = get_theme_mod('background_color', 'D1E4DD');
    if (127 > daniellehmann_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
      add_theme_support('dark-editor-style');
    }

    $editor_stylesheet_path = './assets/css/style-editor.css';

    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE;
    if ($is_IE) {
      $editor_stylesheet_path = './assets/css/ie-editor.css';
    }

    // Enqueue editor styles.
    add_editor_style($editor_stylesheet_path);

    // Add custom editor font sizes.
    add_theme_support(
      'editor-font-sizes',
      array(
        array(
          'name'      => esc_html__('Extra small', 'daniellehmann'),
          'shortName' => esc_html_x('XS', 'Font size', 'daniellehmann'),
          'size'      => 16,
          'slug'      => 'extra-small',
        ),
        array(
          'name'      => esc_html__('Small', 'daniellehmann'),
          'shortName' => esc_html_x('S', 'Font size', 'daniellehmann'),
          'size'      => 18,
          'slug'      => 'small',
        ),
        array(
          'name'      => esc_html__('Normal', 'daniellehmann'),
          'shortName' => esc_html_x('M', 'Font size', 'daniellehmann'),
          'size'      => 20,
          'slug'      => 'normal',
        ),
        array(
          'name'      => esc_html__('Large', 'daniellehmann'),
          'shortName' => esc_html_x('L', 'Font size', 'daniellehmann'),
          'size'      => 24,
          'slug'      => 'large',
        ),
        array(
          'name'      => esc_html__('Extra large', 'daniellehmann'),
          'shortName' => esc_html_x('XL', 'Font size', 'daniellehmann'),
          'size'      => 40,
          'slug'      => 'extra-large',
        ),
        array(
          'name'      => esc_html__('Huge', 'daniellehmann'),
          'shortName' => esc_html_x('XXL', 'Font size', 'daniellehmann'),
          'size'      => 96,
          'slug'      => 'huge',
        ),
        array(
          'name'      => esc_html__('Gigantic', 'daniellehmann'),
          'shortName' => esc_html_x('XXXL', 'Font size', 'daniellehmann'),
          'size'      => 144,
          'slug'      => 'gigantic',
        ),
      )
    );

    // Custom background color.
    add_theme_support(
      'custom-background',
      array(
        'default-color' => 'd1e4dd',
      )
    );

    // Editor color palette.
    $black     = '#000000';
    $dark_gray = '#28303D';
    $gray      = '#39414D';
    $green     = '#D1E4DD';
    $blue      = '#D1DFE4';
    $purple    = '#D1D1E4';
    $red       = '#E4D1D1';
    $orange    = '#E4DAD1';
    $yellow    = '#EEEADD';
    $white     = '#FFFFFF';

    add_theme_support(
      'editor-color-palette',
      array(
        array(
          'name'  => esc_html__('Black', 'daniellehmann'),
          'slug'  => 'black',
          'color' => $black,
        ),
        array(
          'name'  => esc_html__('Dark gray', 'daniellehmann'),
          'slug'  => 'dark-gray',
          'color' => $dark_gray,
        ),
        array(
          'name'  => esc_html__('Gray', 'daniellehmann'),
          'slug'  => 'gray',
          'color' => $gray,
        ),
        array(
          'name'  => esc_html__('Green', 'daniellehmann'),
          'slug'  => 'green',
          'color' => $green,
        ),
        array(
          'name'  => esc_html__('Blue', 'daniellehmann'),
          'slug'  => 'blue',
          'color' => $blue,
        ),
        array(
          'name'  => esc_html__('Purple', 'daniellehmann'),
          'slug'  => 'purple',
          'color' => $purple,
        ),
        array(
          'name'  => esc_html__('Red', 'daniellehmann'),
          'slug'  => 'red',
          'color' => $red,
        ),
        array(
          'name'  => esc_html__('Orange', 'daniellehmann'),
          'slug'  => 'orange',
          'color' => $orange,
        ),
        array(
          'name'  => esc_html__('Yellow', 'daniellehmann'),
          'slug'  => 'yellow',
          'color' => $yellow,
        ),
        array(
          'name'  => esc_html__('White', 'daniellehmann'),
          'slug'  => 'white',
          'color' => $white,
        ),
      )
    );

    add_theme_support(
      'editor-gradient-presets',
      array(
        array(
          'name'     => esc_html__('Purple to yellow', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'purple-to-yellow',
        ),
        array(
          'name'     => esc_html__('Yellow to purple', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
          'slug'     => 'yellow-to-purple',
        ),
        array(
          'name'     => esc_html__('Green to yellow', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'green-to-yellow',
        ),
        array(
          'name'     => esc_html__('Yellow to green', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
          'slug'     => 'yellow-to-green',
        ),
        array(
          'name'     => esc_html__('Red to yellow', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
          'slug'     => 'red-to-yellow',
        ),
        array(
          'name'     => esc_html__('Yellow to red', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
          'slug'     => 'yellow-to-red',
        ),
        array(
          'name'     => esc_html__('Purple to red', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
          'slug'     => 'purple-to-red',
        ),
        array(
          'name'     => esc_html__('Red to purple', 'daniellehmann'),
          'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
          'slug'     => 'red-to-purple',
        ),
      )
    );

    /*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
    if (is_customize_preview()) {
      require get_template_directory() . '/inc/starter-content.php';
      add_theme_support('starter-content', daniellehmann_get_starter_content());
    }

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for custom line height controls.
    add_theme_support('custom-line-height');

    // Add support for experimental link color control.
    add_theme_support('experimental-link-color');

    // Add support for experimental cover block spacing.
    add_theme_support('custom-spacing');

    // Add support for custom units.
    // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
    add_theme_support('custom-units');
  }
}
add_action('after_setup_theme', 'daniellehmann_setup');

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function daniellehmann_widgets_init()
{

  register_sidebar(
    array(
      'name'          => esc_html__('Footer', 'daniellehmann'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here to appear in your footer.', 'daniellehmann'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'daniellehmann_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function daniellehmann_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('daniellehmann_content_width', 750);
}
add_action('after_setup_theme', 'daniellehmann_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_scripts()
{
  // Note, the is_IE global variable is defined by WordPress and is used
  // to detect if the current browser is internet explorer.
  global $is_IE, $wp_scripts;

  wp_enqueue_style('daniellehman', get_template_directory_uri() . '/dist/assets/app.css', array(), '1.0.0', 'all');
  // wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/dist/assets/app.css', array(), wp_get_theme()->get('Version'));
  // RTL styles.
  wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

  // Print styles.
  wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

  // Threaded comment reply styles.
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  // Register the IE11 polyfill file.
  wp_register_script(
    'twenty-twenty-one-ie11-polyfills-asset',
    get_template_directory_uri() . '/assets/js/polyfills.js',
    array(),
    wp_get_theme()->get('Version'),
    true
  );

  // Register the IE11 polyfill loader.
  wp_register_script(
    'twenty-twenty-one-ie11-polyfills',
    null,
    array(),
    wp_get_theme()->get('Version'),
    true
  );
  wp_add_inline_script(
    'twenty-twenty-one-ie11-polyfills',
    wp_get_script_polyfill(
      $wp_scripts,
      array(
        'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
      )
    )
  );

  // Main navigation scripts.

  wp_enqueue_script(
    'twenty-twenty-one-primary-navigation-script',
    get_template_directory_uri() . '/dist/assets/app.js',
    array('twenty-twenty-one-ie11-polyfills'),
    wp_get_theme()->get('Version'),
    true
  );


  // Responsive embeds script.
  wp_enqueue_script(
    'twenty-twenty-one-responsive-embeds-script',
    get_template_directory_uri() . '/assets/js/responsive-embeds.js',
    array('twenty-twenty-one-ie11-polyfills'),
    wp_get_theme()->get('Version'),
    true
  );

  wp_enqueue_script(
    'twenty-twenty-one-script',
    'https://maps.googleapis.com/maps/api/js?key=AIzaSyD3cppWkbu74Fd31Es-CwmVUXnPgnSaGRc&callback=initMap&libraries=&v=weekly',
    array('twenty-twenty-one-ie11-polyfills'),
    wp_get_theme()->get('Version'),
    true
  );
}
add_action('wp_enqueue_scripts', 'daniellehmann_scripts');



function add_footer_styles()
{
  wp_enqueue_style('daniellehman', get_template_directory_uri() . '/dist/assets/app.css', array(), '1.0.0', 'all');
};

// add_action('get_footer', 'add_footer_styles');


/**
 * Add a custom footer menu.
 *
 * @since DanieLehman 1.0
 *
 * @return void
 */

function dl_custom_new_menu()
{
  register_nav_menu('dl-related-items-menu', __('Related pages or sites'));
  register_nav_menu('dl-locations-menu', __('Locations for classes'));
}
add_action('init', 'dl_custom_new_menu');

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_block_editor_script()
{

  wp_enqueue_script('twenty-twenty-one-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'daniellehmann_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function daniellehmann_skip_link_focus_fix()
{

  // If SCRIPT_DEBUG is defined and true, print the unminified file.
  if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
    echo '<script>';
    include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
    echo '</script>';
  }

  // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
?>
  <script>
    /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
      var t, e = location.hash.substring(1);
      /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
    }), !1);
  </script>
<?php
}
add_action('wp_print_footer_scripts', 'daniellehmann_skip_link_focus_fix');

/** Enqueue non-latin language styles
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_non_latin_languages()
{
  $custom_css = daniellehmann_get_non_latin_css('front-end');

  if ($custom_css) {
    wp_add_inline_style('twenty-twenty-one-style', $custom_css);
  }
}
add_action('wp_enqueue_scripts', 'daniellehmann_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new daniellehmann_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new daniellehmann_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new daniellehmann_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_customize_preview_init()
{
  wp_enqueue_script(
    'twenty-twenty-one-customize-helpers',
    get_theme_file_uri('/assets/js/customize-helpers.js'),
    array(),
    wp_get_theme()->get('Version'),
    true
  );

  wp_enqueue_script(
    'twenty-twenty-one-customize-preview',
    get_theme_file_uri('/assets/js/customize-preview.js'),
    array('customize-preview', 'customize-selective-refresh', 'jquery', 'twenty-twenty-one-customize-helpers'),
    wp_get_theme()->get('Version'),
    true
  );
}
add_action('customize_preview_init', 'daniellehmann_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_customize_controls_enqueue_scripts()
{

  wp_enqueue_script(
    'twenty-twenty-one-customize-helpers',
    get_theme_file_uri('/assets/js/customize-helpers.js'),
    array(),
    wp_get_theme()->get('Version'),
    true
  );
}
add_action('customize_controls_enqueue_scripts', 'daniellehmann_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_the_html_classes()
{
  $classes = apply_filters('daniellehmann_html_classes', '');
  if (!$classes) {
    return;
  }
  echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function daniellehmann_add_ie_class()
{
?>
  <script>
    if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
      document.body.classList.add('is-IE');
    }
  </script>
<?php
}
add_action('wp_footer', 'daniellehmann_add_ie_class');

/**
 * MOVE YOAST BOX BELOW ACF BOXES
 *
 */

add_filter('wpseo_metabox_prio', function () {
  return 'low';
});
