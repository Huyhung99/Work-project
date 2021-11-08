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

<div class="templateCollection ">


  <header id="top" class="clearfix ">
    <!--top-->
    <div class="container">
      <div class="top row">
        <div class="col-md-6 phone-shopping">
          <?php if ($page['hotline_header']) print html_entity_decode(render($page['hotline_header'])) ?>
        </div>
        <div class="col-md-18">
          <ul class="text-right">
            <?php if ($page['contact_social_media']) print html_entity_decode(render($page['contact_social_media'])) ?>
          </ul>
        </div>
      </div>
    </div>
    <!--End top-->
    <div class="line"></div>
    <!-- Navigation -->
    <div class="container">
      <div class="top-navigation">
        <ul class="list-inline">
          <li class="top-logo">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
              </a>
            <?php endif; ?>
          </li>
          <li class="navigation">
            <nav class="navbar">
              <div class="clearfix">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse"
                          data-target=".navbar-collapse">
                    <span class="sr-only">Toggle main navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="is-mobile visible-xs">
                  <ul class="list-inline">
                    <li class="is-mobile-menu">
                      <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="icon-bar-group">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</span>
                      </div>
                    </li>
                    <li class="is-mobile-login">
                      <div class="btn-group">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-user"></i>
                        </div>
                        <ul class="customer dropdown-menu">
                          <li class="logout">
                            <a href="/user">Đăng nhập</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="is-mobile-cart">
                      <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="collapse navbar-collapse">
                  <?php print getMenuPhucLongJewelry() ?>
                </div>
              </div>
            </nav>
          </li>
          <li class="top-search hidden-xs">
            <div class="header-search">
              <a href="#">
							<span data-toggle="dropdown">
							<i class="fa fa-search"></i>
							<i class="sub-dropdown1"></i>
							<i class="sub-dropdown"></i>
							</span>
              </a>
              <?php if($page['search_product_front']) print render($page['search_product_front'])?>
            </div>
          </li>
          <li class="umbrella hidden-xs">
            <?php if ($page['cart']) print render($page['cart']) ?>
          </li>
          <li class="mobile-search visible-xs">
            <?php if($page['search_product_mobile']) print render($page['search_product_mobile'])?>
          </li>
        </ul>
      </div>
      <!--End Navigation-->
    </div>
    <!-- Facebook Conversion Code for Themes -->
  </header>
<div id="content-wrapper-parent templateCollection">
    <div id="content-wrapper">
        <!-- Content -->
        <div id="content" class="clearfix">
            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <?php if ($breadcrumb): ?>
                                <?php print $breadcrumb; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php print $messages; ?>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="collection-content">
                            <div id="page-header">
                                <?php print render($title_prefix); ?>
                                <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                                <?php print render($title_suffix); ?>
                            </div>
                            <div class="collection-warper col-sm-24 clearfix">
                                <div class="collection-panner">
                                    <?php if ($page['banner_subpage']) print html_entity_decode(render($page['banner_subpage']))?>
                                </div>
                            </div>
                            <?php $col = 24?>
                            <?php if ($page['sidebar_right']): ?>
                                <?php $col = 18?>
                            <?php endif;?>
                            <div class="collection-main-content">
                                <div id="col-main" class="mt-50 collection collection-page col-sm-<?=$col?> col-md-<?=$col?> no_full_width">
                                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                                    <?php print render($page['help']); ?>
                                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                                    <?php print render($page['content']); ?>
                                </div>
                                <?php if ($page['sidebar_right']): ?>
                                    <div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
                                        <div class="group_sidebar">
                                            <?php print render($page['sidebar_right'])?>
                                        </div>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
    <footer id="footer">
        <div id="footer-content">
            <div class="footer-content footer-content-top clearfix">
                <div class="container">
                    <div class="footer-link-list col-md-9">
                        <?php if ($page['footer_contact_info']) print html_entity_decode(render($page['footer_contact_info'])) ?>
                    </div>
                    <div class="footer-link-list col-md-11">
                        <?php if ($page['footer_product_categories']) print render($page['footer_product_categories']) ?>
                    </div>
                    <div class="footer-link-list col-md-4">
                        <?php if ($page['footer_categories']) print render($page['footer_categories']) ?>
                    </div>
                </div>
            </div>
            <div class="footer-content footer-content-bottom clearfix">
                <div class="container">
                    <div class="copyright col-md-12">
                        <?php if ($page['footer_bottom']) print html_entity_decode(render($page['footer_bottom'])) ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

