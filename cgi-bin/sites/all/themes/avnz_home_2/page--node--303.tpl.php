<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. kickstart/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   kickstart, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   kickstart, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php print render($page['content']['metatags']); ?>
<div class="top-header">
  <div class="container">
    <div class="container-fluid custom-container">
      <div class="row">
        <div class="col-md-12">
          <div class="top-left">
            <?php if($page['header_top']) print render($page['header_top']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="image-logo">
  <div class="container">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img  class="image-fit" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
  </div>
</div>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="navigation">
          <div class="logo">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img  class="image-fit" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
          <div class="main-navigation">
            <nav class="menu-search">
              <?php print getMainMenuAVNZ2($page);?>
            </nav>
          </div>
          <div class="right-side-navigation">
            <ul>
              <li class="hamburger-menu">
                <a class="menu-btn"> <span></span>
                  <span></span>
                  <span></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="main-sec"></div>
<!-- breadcrumb -->
<div class="breadcrumb-area">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="breadcrumb-content container-fluid">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- breadcrumb -->

<!-- Blog -->

<div class="our-articles bg-light-theme section-padding ">
  <div class="container">
    <?php print $messages; ?>
    <div class="row">
      <div class="col-md-6">
        <?php print render($page['content']); ?>
      </div>
      <div class="col-md-6">
        <?php if($page['form_contact']) print render($page['form_contact']); ?>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<footer class="section-padding bg-light-theme pt-0 u-line bg-custom-primary">
  <div class="container">
    <div class="do-not-enter">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6">
          <?php if($page['col1_footer']) print render($page['col1_footer']);  ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <?php if($page['col2_footer']) print render($page['col2_footer']);  ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <?php if($page['col3_footer']) print render($page['col3_footer']); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <?php if($page['bottom_footer']) print render($page['bottom_footer']); ?>
  </div>
</div>
<!-- footer -->
