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
<?php print render($page['content']['metatags']); ?>
<div class="page-wrapper">
  <!-- main header -->
  <header class="main-header">
    <!-- header info -->
    <div class="header-info">
      <div class="container">
        <div class="clearfix">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-logo">
                        <?php if ($logo): ?>
                            <a class="navbar-brand logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" >
                                <img  src="<?php print $logo; ?>" alt="<?php print t('Đại lý thuế Miền Bắc'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="float-right">
                    <?php if($page['header_info']) print html_entity_decode(render($page['header_info'])) ?>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper container">
      <div class="container clearfix">
        <div class="upper-right clearfix">

          <div class="nav-outer clearfix">
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-lg">
              <div class="navbar-header">
                <!-- Toggle Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="navbar-collapse collapse clearfix">
                <?php print getMainMenuDLThueMB(); ?>
              </div>
            </nav>

            <!-- Main Menu End-->
              <div class="outer-box float-right">
                  <!--Search Box-->
                  <div class="search-box-outer">
                      <div class="dropdown">
                          <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                          <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                              <li class="panel-outer">
                                  <div class="form-container">
                                      <?php if ($page['search_block']) print render($page['search_block'])?>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="reservation-form-btn consult-form-btn"><span class="icon flaticon-menu-options"></span></div>
              </div>


          </div>
        </div>
      </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <!--End Sticky Header-->
  </header>

  <?php if($page['main_frontend']) print render($page['main_frontend'])?>

  <!-- main-footer -->
  <footer class="main-footer parallax-two container" style="">

    <div class="sp-three">
      <div class="container">
        <div class="row">

          <!--Big Column-->
          <div class="big-column col-md-5 col-sm-12 col-xs-12">
            <div class="row clearfix">

              <!--Footer Column-->
              <div class="footer-column col-md-8 col-sm-6 col-xs-12">
                <?php if($page['col1_footer']) print render($page['col1_footer'])?>
              </div>

              <!--Footer Column-->
              <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                <?php if($page['col2_footer']) print render($page['col2_footer'])?>
              </div>

            </div>
          </div>

          <!--Big Column-->
          <div class="big-column col-md-7 col-sm-12 col-xs-12">
            <div class="row clearfix">
              <!--Footer Column-->
              <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                <?php if($page['col3_footer']) print render($page['col3_footer'])?>
              </div>

              <!--Footer Column-->
              <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                <?php if($page['col4_footer']) print render($page['col4_footer'])?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
      <?php if($page['footer_bottom']) print render($page['footer_bottom'])?>
    </div>
  </footer>
</div>
<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
  <span class="fa fa-angle-up"></span>
</button>


