<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>">
<head>
  <?php print $head; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--  <link rel="preload" href="/sites/all/modules/google_webfont_loader_api/fonts/fonts/flaticon.woff" as="font" crossorigin="anonymous">-->
<!--  <link rel="preload" href="/sites/all/modules/google_webfont_loader_api/fonts/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" crossorigin="anonymous">-->
<!--  <link rel="preload" href="/sites/all/modules/google_webfont_loader_api/fonts/awesome/stylesheet.css" as="style"/>-->

<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<!--  <link rel="preload" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" as="font"  crossorigin="anonymous">-->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" as="font"  crossorigin="anonymous">
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <a href="tel:0888310638">
    <div class="hotlinefix">
      <div class="circle-hotline">
          <span>
              <img src="http://avnz.vn/sites/all/themes/avnz_home_2/assets/img/hotline.png">
          </span>
      </div>
    </div>
  </a>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
       attribution=setup_tool
       page_id="110075534114955"
       theme_color="#0084ff"
       logged_in_greeting="Chào Mừng Quý Khách Đã Đến Với AVNZ - Thiết Bị Vệ Sinh & Gạch Ốp Lát Cao Cấp"
       logged_out_greeting="Chào Mừng Quý Khách Đã Đến Với AVNZ - Thiết Bị Vệ Sinh & Gạch Ốp Lát Cao Cấp">
  </div>
</body>
</html>
