<?php

/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/**
 * Register Block Pattern Category.
 */
if (function_exists('register_block_pattern_category')) {

  register_block_pattern_category(
    'daniellehmann',
    array('label' => esc_html__('Daniel Lehmann', 'daniellehmann'))
  );
}

/**
 * Register Block Patterns.
 */
if (function_exists('register_block_pattern')) {

  // Narrow-ish centered text.
  register_block_pattern(
    'daniellehmann/narrow-content-extended',
    array(
      'title'         => esc_html__('Narrow content extended', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'content'       => '<!-- wp:group {"className":"centered"} --><div class="wp-block-group centered"><div class="wp-block-group__inner-container"><!-- wp:heading --><h2>Jazzy gepluk of gevoelig gestrijk</h2><!-- /wp:heading --><!-- wp:paragraph --><p>At a tiny Parisian café, the adorable yet painfully shy Amélie (Audrey Tautou) accidentally discovers a gift for helping others. Soon Amelie is spending her days as a matchmaker, guardian angel, and all-around do-gooder. But when she bumps into a handsome stranger, will she find the courage to become the star of her very own love story?</p><!-- /wp:paragraph --><!-- wp:image {"id":214,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="http://daniellehman.local/wp-content/uploads/2021/06/ausdauer-d-e1624908242702-1024x481.jpeg" alt="ausdauer spanning" class="wp-image-214"/><figcaption>De eeuw van Ariane</figcaption></figure><!-- /wp:image --><!-- wp:heading {"level":3} --><h3>Hoe gaan we aan de slag?</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Amélies mother, Amandine Fouet, was a Primary School teacher from Gueugnon, she had always been unstable and nervy. She doesnt like to have her fingers all wrinkled by hot water.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>She doesnt like it when somebody she does not like touches her, to have the marks of the sheets on her cheek in the morning. She likes the outfits of the ice-skaters on TV, to shine the flooring, to empty her handbag clean it thoroughly, and, finally, putting everything away carefully.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Zomaar een button</a></div><!-- /wp:button --><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">En een tweede button</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div></div><!-- /wp:group -->'
    )
  );

  // Narrow-ish centered text.
  register_block_pattern(
    'daniellehmann/narrowish-text',
    array(
      'title'         => esc_html__('Narrow centered text', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'content'       => '<!-- wp:group {"className":"centered"} --><div class="wp-block-group centered"><div class="wp-block-group__inner-container"><!-- wp:heading --><h2>Jazzy gepluk of gevoelig gestrijk</h2><!-- /wp:heading --><!-- wp:paragraph --><p>At a tiny Parisian café, the adorable yet painfully shy Amélie (Audrey Tautou) accidentally discovers a gift for helping others. Soon Amelie is spending her days as a matchmaker, guardian angel, and all-around do-gooder. But when she bumps into a handsome stranger, will she find the courage to become the star of her very own love story?</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Hoe gaan we aan de slag?</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Amélies mother, Amandine Fouet, was a Primary School teacher from Gueugnon, she had always been unstable and nervy. She doesnt like to have her fingers all wrinkled by hot water.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>She doesnt like it when somebody she doesnt like touches her, to have the marks of the sheets on her cheek in the morning.<br>She likes the outfits of the ice-skaters on TV, to shine the flooring, to empty her handbag clean it thoroughly, and, finally, putting everything away carefully.</p><!-- /wp:paragraph --></div></div><!-- /wp:group -->'
    )
  );

  // Foote Call to Action (two col text).
  register_block_pattern(
    'daniellehmann/footer-cta',
    array(
      'title'         => esc_html__('Footer CTA', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'content'       => '<!-- wp:group {"className":"footer-cta"} --><div class="wp-block-group footer-cta"><div class="wp-block-group__inner-container"><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>Contrabas én basgitaar lessen <em><a href="http://daniellehman.local/sample-page/" data-type="page" data-id="2">voor volwassenen</a></em></h3><!-- /wp:heading --><!-- wp:paragraph --><p>Afhankelijk van je niveau blabla</p><!-- /wp:paragraph --><!-- wp:heading {"level":4} --><h4>Hoe gaan we aan de slag?</h4><!-- /wp:heading --><!-- wp:paragraph --><p>Ken je de bas nog niet, boek dan eerst vrijblijvend een <a href="http://daniellehman.local/sample-page/" data-type="page" data-id="2">leuke proefles.</a></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Speel je al iets, of weet je precies wat je wilt? Leuk! Dan gaan we aan de slag.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Button</a></div><!-- /wp:button --><!-- wp:button {"className":"phone"} --><div class="wp-block-button phone"><a class="wp-block-button__link">Button</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3><em><a href="http://daniellehman.local/sample-page/" data-type="page" data-id="2">Improvisatielessen</a></em> voor de gevorderde muzikant</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Afhankelijk van je niveau gaan we lekker jammen met feedback of iets anders.</p><!-- /wp:paragraph --><!-- wp:heading {"level":4} --><h4>Klassiek of Tango</h4><!-- /wp:heading --><!-- wp:paragraph --><p>Ken je de bas nog niet, boek dan eerst vrijblijvend een leuke proefles.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Button</a></div><!-- /wp:button --><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Button</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --></div></div><!-- /wp:group -->'
    )
  );

  // About Columns and text
  register_block_pattern(
    'daniellehmann/two-col-text-image',
    array(
      'title'         => esc_html__('Two Column Text Image', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'content'       => '<!-- wp:columns {"className":"text-image-columns"} --><div class="wp-block-columns text-image-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>Muzikant</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Of je nu vol voor de jazz gaat of meer richting de tango</p><!-- /wp:paragraph --><!-- wp:image {"id":91,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="http://daniellehman.local/wp-content/uploads/2021/06/daniel-profile-klein.jpg" alt="" class="wp-image-91"/></figure><!-- /wp:image --><!-- wp:paragraph --><p>Hoewel van huis uit jazzbassist, heeft Daniël zich de afgelopen jaren ontwikkeld tot één van de weinige specialisten in de Argentijnse folklore en tango in Europa. Hij toerde met <a href="https://www.patrickteulings.nl">Sexteto Canyengue</a> en speelde met Argentijnse grootheden als Juan José Mosalini en Facundo Guevara.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>Componist</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Of je nu vol voor de jazz gaat of meer richting de tango</p><!-- /wp:paragraph --><!-- wp:image {"id":112,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="http://daniellehman.local/wp-content/uploads/2021/06/componist-2.jpg" alt="" class="wp-image-112"/></figure><!-- /wp:image --><!-- wp:paragraph --><p>Hoewel van huis uit jazzbassist, heeft Daniël zich de afgelopen jaren ontwikkeld tot één van de weinige specialisten in de Argentijnse folklore en tango in Europa. Hij toerde met <a href="https://www.patrickteulings.nl">Sexteto Canyengue</a> en speelde met Argentijnse grootheden als Juan José Mosalini en Facundo Guevara.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns -->'
    )
  );

  // Large Text.
  register_block_pattern(
    'daniellehmann/page-quote',
    array(
      'title'         => esc_html__('Page quote', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'content'       => '<!-- wp:pullquote {"className":"narrow"} --><figure class="wp-block-pullquote narrow"><blockquote><p>On September 3, 1973 6:28 pm and 32 sec. a blue fly of the Calliphorides species, whose wings can flutter 14670 times per minute landed in Saint-Vincent Street, Montmartre.</p></blockquote></figure><!-- /wp:pullquote -->'
    )
  );


  // Large Text.
  register_block_pattern(
    'daniellehmann/large-text',
    array(
      'title'         => esc_html__('Large text', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1440,
      'content'       => '<!-- wp:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} --><h2 class="alignwide has-text-align-wide has-gigantic-font-size" style="line-height:1.1">' . esc_html__('A new portfolio default theme for WordPress', 'daniellehmann') . '</h2><!-- /wp:heading -->',
    )
  );

  // Links Area.
  register_block_pattern(
    'daniellehmann/links-area',
    array(
      'title'         => esc_html__('Links area', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1440,
      'description'   => esc_html_x('A huge text followed by social networks and email address links.', 'Block pattern description', 'daniellehmann'),
      'content'       => '<!-- wp:cover {"overlayColor":"green","contentPosition":"center center","align":"wide","className":"is-style-twenty-twenty-one-border"} --><div class="wp-block-cover alignwide has-green-background-color has-background-dim is-style-twenty-twenty-one-border"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:paragraph {"fontSize":"huge"} --><p class="has-huge-font-size">' . wp_kses_post(__('Let&#8217;s Connect.', 'daniellehmann')) . '</p><!-- /wp:paragraph --><!-- wp:spacer {"height":75} --><div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="#" data-type="URL">' . esc_html__('Twitter', 'daniellehmann') . '</a> / <a href="#" data-type="URL">' . esc_html__('Instagram', 'daniellehmann') . '</a> / <a href="#" data-type="URL">' . esc_html__('Dribbble', 'daniellehmann') . '</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="#">' . esc_html__('example@example.com', 'daniellehmann') . '</a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --></div></div><!-- /wp:cover --><!-- wp:paragraph --><p></p><!-- /wp:paragraph -->',
    )
  );

  // Media & Text Article Title.
  register_block_pattern(
    'daniellehmann/media-text-article-title',
    array(
      'title'         => esc_html__('Media and text article title', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1440,
      'description'   => esc_html_x('A Media & Text block with a big image on the left and a heading on the right. The heading is followed by a separator and a description paragraph.', 'Block pattern description', 'daniellehmann'),
      'content'       => '<!-- wp:media-text {"mediaId":1752,"mediaLink":"' . esc_url(get_template_directory_uri()) . '/assets/images/playing-in-the-sand.jpg","mediaType":"image","className":"is-style-twenty-twenty-one-border"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-twenty-twenty-one-border"><figure class="wp-block-media-text__media"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/playing-in-the-sand.jpg" alt="' . esc_attr__('&#8220;Playing in the Sand&#8221; by Berthe Morisot', 'daniellehmann') . '" class="wp-image-1752"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"center"} --><h2 class="has-text-align-center">' . esc_html__('Playing in the Sand', 'daniellehmann') . '</h2><!-- /wp:heading --><!-- wp:separator {"className":"is-style-dots"} --><hr class="wp-block-separator is-style-dots"/><!-- /wp:separator --><!-- wp:paragraph {"align":"center","fontSize":"small"} --><p class="has-text-align-center has-small-font-size">' . wp_kses_post(__('Berthe Morisot<br>(French, 1841-1895)', 'daniellehmann')) . '</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
    )
  );

  // Overlapping Images.
  register_block_pattern(
    'daniellehmann/overlapping-images',
    array(
      'title'         => esc_html__('Overlapping images', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1024,
      'description'   => esc_html_x('Three images inside an overlapping columns block.', 'Block pattern description', 'daniellehmann'),
      'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-twenty-twenty-one-columns-overlap"} --><div class="wp-block-columns alignwide are-vertically-aligned-center is-style-twenty-twenty-one-columns-overlap"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__('&#8220;Roses Trémières&#8221; by Berthe Morisot', 'daniellehmann') . '"/></figure><!-- /wp:image --><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__('&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'daniellehmann') . '"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full",sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__('&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'daniellehmann') . '"/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns -->',
    )
  );

  // Two Images Showcase.
  register_block_pattern(
    'daniellehmann/two-images-showcase',
    array(
      'title'         => esc_html__('Two images showcase', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1440,
      'description'   => esc_html_x('A media & text block with a big image on the left and a smaller one with bordered frame on the right.', 'Block pattern description', 'daniellehmann'),
      'content'       => '<!-- wp:media-text {"mediaId":1747,"mediaLink":"' . esc_url(get_template_directory_uri()) . '/assets/images/Daffodils.jpg","mediaType":"image"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/Daffodils.jpg" alt="' . esc_attr__('&#8220;Daffodils&#8221; by Berthe Morisot', 'daniellehmann') . '" size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:image {"align":"center","width":400,"height":512,"sizeSlug":"large","className":"is-style-twenty-twenty-one-image-frame"} --><figure class="wp-block-image aligncenter size-large is-resized is-style-twenty-twenty-one-image-frame"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/self-portrait-1885.jpg" alt="' . esc_attr__('&#8220;Self portrait&#8221; by Berthe Morisot', 'daniellehmann') . '" width="400" height="512"/></figure><!-- /wp:image --></div></div><!-- /wp:media-text -->',
    )
  );

  // Overlapping Images and Text.
  register_block_pattern(
    'daniellehmann/overlapping-images-and-text',
    array(
      'title'         => esc_html__('Overlapping images and text', 'daniellehmann'),
      'categories'    => array('daniellehmann'),
      'viewportWidth' => 1440,
      'description'   => esc_html_x('An overlapping columns block with two images and a text description.', 'Block pattern description', 'daniellehmann'),
      'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"is-style-twenty-twenty-one-columns-overlap"} --> <div class="wp-block-columns alignwide is-style-twenty-twenty-one-columns-overlap"><!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__('&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'daniellehmann') . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"bottom"} --> <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"className":"is-style-twenty-twenty-one-border","backgroundColor":"green"} --> <div class="wp-block-group is-style-twenty-twenty-one-border has-green-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"fontSize":"extra-large","style":{"typography":{"lineHeight":"1.4"}}} --> <p class="has-extra-large-font-size" style="line-height:1.4">' . esc_html__('Beautiful gardens painted by Berthe Morisot in the late 1800s', 'daniellehmann') . '</p> <!-- /wp:paragraph --></div></div> <!-- /wp:group --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="' . esc_attr__('&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot', 'daniellehmann') . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns -->',
    )
  );

  // Portfolio List.
  register_block_pattern(
    'daniellehmann/portfolio-list',
    array(
      'title'       => esc_html__('Portfolio list', 'daniellehmann'),
      'categories'  => array('daniellehmann'),
      'description' => esc_html_x('A list of projects with thumbnail images.', 'Block pattern description', 'daniellehmann'),
      'content'     => '<!-- wp:separator {"className":"is-style-twenty-twenty-one-separator-thick"} --> <hr class="wp-block-separator is-style-twenty-twenty-one-separator-thick"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('Roses Trémières', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":85,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__('&#8220;Roses Trémières&#8221; by Berthe Morisot', 'daniellehmann') . '" width="85" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('Villa with Orange Trees, Nice', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":53,"height":67,"className":"alignright size-large is-resized"} --><figure class="wp-block-image is-resized alignright size-large"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot" width="53" height="67"/></figure><!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('In the Bois de Boulogne', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":81,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__('&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'daniellehmann') . '" width="81" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('The Garden at Bougival', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":85,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__('&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'daniellehmann') . '" width="85" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('Young Woman in Mauve', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":54,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__('&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'daniellehmann') . '" width="54" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__('Reading', 'daniellehmann') . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":84,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/Reading.jpg" alt="' . esc_attr__('&#8220;Reading&#8221; by Berthe Morisot', 'daniellehmann') . '" width="84" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-twenty-twenty-one-separator-thick"} --> <hr class="wp-block-separator is-style-twenty-twenty-one-separator-thick"/> <!-- /wp:separator -->',
    )
  );

  register_block_pattern(
    'daniellehmann/contact-information',
    array(
      'title'       => esc_html__('Contact information', 'daniellehmann'),
      'categories'  => array('daniellehmann'),
      'description' => esc_html_x('A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'daniellehmann'),
      'content'     => '<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="mailto:#">' . esc_html_x('example@example.com', 'Block pattern sample content', 'daniellehmann') . '<br></a>' . esc_html_x('123-456-7890', 'Block pattern sample content', 'daniellehmann') . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x('123 Main Street', 'Block pattern sample content', 'daniellehmann') . '<br>' . esc_html_x('Cambridge, MA, 02139', 'Block pattern sample content', 'daniellehmann') . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"align":"right","className":"is-style-twenty-twenty-one-social-icons-color"} --><ul class="wp-block-social-links alignright is-style-twenty-twenty-one-social-icons-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--><!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /--><!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul><!-- /wp:social-links --></div><!-- /wp:column --></div><!-- /wp:columns -->',
    )
  );
}
