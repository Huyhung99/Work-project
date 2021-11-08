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
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>">

<head>
  <?php print $head; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <style>body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #002f4b;
        }

        .header, .footer, .container, .register-form, .showroom-form, .contact-form, .mobile-option {
            visibility: hidden;
        }</style>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <div id="render-styles"></div>
  <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700&amp;display=swap&amp;subset=vietnamese">
      <link rel="stylesheet" href="/sites/all/themes/noithat/assets/css/app-ver=1.0.1.css">
  </noscript>
  <script>var loadDeferredStyles = function () {
          var addStylesNode = document.getElementById("deferred-styles");
          var replacement = document.getElementById("render-styles");
          replacement.innerHTML = addStylesNode.textContent;
          document.body.appendChild(replacement)
          addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function () { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);</script>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/themes/noithat/assets/js/animate.js"></script>
  <script type="text/javascript" src="/sites/all/themes/noithat/assets/js/jquery.js"></script>
  <script type="text/javascript" src="/sites/all/themes/noithat/assets/js/validate-v=1.0.1.js"></script>
  <script src="/sites/all/themes/noithat/assets/js/app-ver=1.0.1.js"></script>
</body>
</html>
