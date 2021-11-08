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

<div id="wrapper" class="clearfix">

    <header id="header" class="header">
        <div class="header-middle p-0 bg-lighter xs-text-center">
            <div class="container pt-10 pb-10">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <?php if ($logo): ?>
                            <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase"></a>
                            <h5 class="font-15 text-theme-colored pt-10 m-0"> lieudr@gmail.com</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase"></a>
                            <h5 class="font-15 text-theme-colored pt-10 m-0"> 0913 576 659</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="fa fa-building-o text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase"></a>
                            <h5 class="font-15 text-theme-colored m-0">Số 16+18 ngõ 292 Lạch Tray-Lê Chân- Hải Phòng</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord" class="menuzord green menuzord-responsive">
                        <?php print getMainMenuNhaKhoaHoangAnh()?>
                        <div class="pull-right sm-pull-none mb-sm-15">
                            <?php print l('ĐĂNG KÍ NGAY', 'dang-ki-ngay',array('attributes'  => array('class' => array('btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10  text-uppercase')))); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="/sites/default/files/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <ol class="breadcrumb text-center text-black mt-10">
                                <?php if ($breadcrumb): ?>
                                    <li id="breadcrumb"><?php print $breadcrumb; ?></li>
                                <?php endif; ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: event calendar -->
        <section>
            <div class="container">
                <div class="row">
                    <?php $col = 12?>
                    <?php if ($page['sidebar_first']): ?>
                        <?php $col = 9?>
                    <?php endif;?>
                    <div class="col-md-<?=$col?>">
                        <?php print $messages; ?>
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php print render($page['content']); ?>
                    </div>
                    <?php if ($page['sidebar_first']): ?>
                        <div class="col-md-3">
                            <div class="sidebar sidebar-right mt-sm-30">
                                <?php print render($page['sidebar_first']); ?>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
    </div>

    <footer id="footer" class="footer bg-black-111">
        <div class="container pt-30 pb-30">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <?php if($page['col_1_footer']) print render($page['col_1_footer']); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <?php if($page['col_2_footer']) print render($page['col_2_footer']); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <?php if($page['col_3_footer']) print render($page['col_3_footer']); ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <?php if($page['col_4_footer']) print render($page['col_4_footer']); ?>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-222">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-6 sm-text-center">
                        <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

