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
<div class="main-wrapper">
  <?php print $messages; ?>
  <div class="wrapper home-default-wrapper">
    <header class="header-area header-default sticky-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
            <div class="header-logo-area">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img class="logo-main" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                  <img class="logo-light" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                </a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-7 col-sm-9 col-md-9 col-lg-10">
            <div class="header-align">
              <div class="header-navigation-area">
                <?php print getMainMenubosch();?>
              </div>
              <div class="header-action-area">
                <?php if($page['mini_cart']) print render($page['mini_cart']) ;?>
                <button class="btn-menu d-lg-none">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="main-content site-wrapper-reveal">
      <section class="page-title-area" style="background-position: center;background-image: linear-gradient(to bottom, rgb(0 0 0 / 52%), rgb(0 0 0 / 31%)),    url(/sites/default/files/pexels-max-vakhtbovych-6301168.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-content text-center">
                <h1 class="title text-white"><?= $node->title?></h1>
                <div class="bread-crumbs"><a href="/">Trang chủ<span class="breadcrumb-sep">/</span></a><span class="active"><?=$node->title?></span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="product-area product-grid-area">
        <div class="container">
          <div class="row">
            <?php $col = 12;?>
            <?php if ($page['sidebar_right']): ?>
              <?php $col = 9;?>

            <?php endif;?>
              <?php if ($page['sidebar_right']): ?>

                <div class="col-lg-3 order-lg-2 order-2">

              <div class="shop-sidebar-area sidebar-area">
                  <div class="widget">
                      <?php print str_replace('<div>-danh-muc-</div>',getProductCategories_danhmuc(),str_replace('<div>{{--tim-kiem--}}</div>',getProductCategories(), render($page['sidebar_right'])))?>
                  </div>
              </div>
            </div>
              <?php endif;?>
              <div class="col-lg-<?=$col?> order-lg-1 order-1">
                <div class="product-area featured-product-area pt-0 pb-0" data-aos="fade-up" data-aos-duration="1000">
                  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                  <?php print render($page['help']); ?>
                  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                  <?php print render($page['content']); ?>
                </div>
              </div>
        </div>
      </section>
    </main>
  </div>
    <footer class="footer-area">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <?php if ($page['col_1']) {
                            print html_entity_decode(render($page['col_1']));
                        } ?>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="ml-50 ml-mb-0 widget-item widget-menu-item">
                            <h4 class="widget-title">Liên kết</h4>
                            <nav class="widget-menu-wrap">
                                <?php print muc_menu_footer(); ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-item">
                            <?php if ($page['col_3']) {
                                print html_entity_decode(render($page['col_3']));
                            } ?>
                        </div>
                        <a target="_blank"></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget-item">
                            <h4 class="widget-title">Bản đồ</h4>
                            <?php if ($page['col_4']) {
                                print html_entity_decode(render($page['col_4']));
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="widget-copyright text-center">
                                <?php if ($page['bottom_footer']) {
                                    print html_entity_decode(render($page['bottom_footer']));
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>





