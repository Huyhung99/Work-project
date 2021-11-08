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
<div id="wrapper">
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-light sm-text-center style-bordered">
      <?php if($page['header_top']) print html_entity_decode(render($page['header_top'])) ; ?>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange no-bg">
            <a class="menuzord-brand pull-left flip" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img  src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" height="58px" width="54px"/>
            </a>
            <?php print getMainMenuNNDK('menuzord-menu') ?>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <?php if($page['main_frontend']) print render($page['main_frontend']) ?>
    <!-- Section: About  -->
    <section id="about">
      <div class="container pb-20 pb-sm-20">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-8">
              <?php if($page['left_about']) print html_entity_decode(render($page['left_about']))  ?>
            </div>
            <div class="col-sm-6 col-md-4">
              <?php if($page['new_event']) print render($page['new_event']) ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php if($page['bottom_main_frontend']) print render($page['bottom_main_frontend']) ?>

  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container container pt-20 pb-20">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-4">
          <?php if($page['footer_1']) print html_entity_decode(render($page['footer_1']))  ?>
        </div>
        <div class="col-sm-6 col-md-4">
          <?php if($page['footer_2']) print html_entity_decode(render($page['footer_2'])) ?>
        </div>
        <div class="col-sm-12 col-md-4">
          <?php if($page['footer_3']) print html_entity_decode(render($page['footer_3'])) ?>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-222">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="font-14 text-white m-0 mb-10">Copyright &copy;<?=date("Y")?> Wecan English Center.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
</div>


