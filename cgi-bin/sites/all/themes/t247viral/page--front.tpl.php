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
 * - $directory: The directory the template is located in, e.g. modules/system
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
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
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
<!-- start page-wrapper -->
<?php print render($page['content']['metatags'])?>
<div class="page-wrapper">
  <!-- Start header -->
  <header id="header" class="site-header header-style-2">
    <?php if($page['top_header']) print render($page['top_header']); ?>



    <nav class="navigation navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="open-btn">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" class="navbar-brand" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
          <button class="close-navbar"><i class="ti-close"></i></button>
          <?php print getMainMenu247Viral(); ?>
        </div><!-- end of nav-collapse -->

        <div class="search-contact">
          <div class="header-search-area">
            <div class="header-search-form">
              <?php if($page['searchBlock']) print render($page['searchBlock'])?>
            </div>
            <div>
              <button class="btn open-btn"><i class="ti-search"></i></button>
            </div>
          </div>
        </div>
        <div class="separator"></div>
      </div><!-- end of container -->
    </nav>
  </header>
  <!-- end of header -->

  <?php if($page['main_content_front']) print render($page['main_content_front']) ?>

  <!-- start site-footer -->
  <footer class="site-footer ">
    <div class="upper-footer">
      <div class="container">
        <div class="row">
          <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <?php if($page['col_1_footer']) print render($page['col_1_footer']); ?>
          </div>
          <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <?php if($page['col_2_footer']) print render($page['col_2_footer']); ?>
          </div>
          <div class="col col-lg-4 col-md-4 col-sm-6 hidden-xs">
            <?php if($page['col_3_footer']) print render($page['col_3_footer']); ?>
          </div>
        </div>
      </div> <!-- end container -->
    </div>
    <div class="lower-footer">
      <?php if($page['lower_footer']) print render($page['lower_footer']); ?>
    </div>
  </footer>
  <!-- end site-footer -->
</div>
