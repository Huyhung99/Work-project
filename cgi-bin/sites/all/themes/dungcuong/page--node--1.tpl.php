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

<div class="page-wraper">
    <!-- Header -->
    <header class="site-header header-style-1 dark mo-left">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="dez-topbar-right list-unstyled e-p-bx ">
                        <ul>
                            <li><i class="fa fa-envelope"></i><span><a href="mailto:info@vantaidungcuong.com">info@vantaidungcuong.com</a></span></li>
                            <li><i class="fa fa-phone"></i><span><a href="tel: 02253500859">0225.3500.859</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <div class="logo-header mostion">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik Search -->
                    <div class="dez-quik-search bg-primary">
                        <?php if ($page['page_search_front']) print render($page['page_search_front'])?>
                    </div>
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <?php print getMenuDungCuong()?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--    body-->
    <div class="page-content">
        <div class="dez-bnr-inr overlay-black-middle bgc-blog">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title text-white"
                                             id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
        <?php if ($breadcrumb): ?>
            <div class="container"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
        </div>
        <?php print $messages;?>

        <div class="content-area">
            <div class="container">
                <h4>Thông tin liên hệ</h4>
                <?php if ($page['contact_info']) print html_entity_decode(render($page['contact_info'])); ?>
                <div class="row">
                    <!-- Side bar start -->
                    <?php
                    $col = 6;
                    ?>
                    <!-- Side bar END -->
                    <!-- Left part start -->
                    <div class="col-xl-<?= $col ?> col-lg-<?= $col ?> col-md-<?= $col ?>">
                        <?php if ($tabs): ?>
                            <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php if ($page['contact_form']) print render($page['contact_form']); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php if ($page['contact_location']) print html_entity_decode(render($page['contact_location'])); ?>
                    </div>
                    <!-- Left part END -->
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer footer-overlay bg-img-fix bgc-image">
        <div class="footer-top">
            <div class="container saf-footer">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php if ($page['col1_footer']) print  html_entity_decode(render($page['col1_footer'])) ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php if ($page['col2_footer']) print  html_entity_decode(render($page['col2_footer'])) ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php if ($page['col3_footer']) print  html_entity_decode(render($page['col3_footer'])) ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php if ($page['col4_footer']) print  render($page['col4_footer']) ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <span>© Copyright <?= date('Y') ?></span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span> Design With <i class="fa fa-heart text-primary heart"></i> By <a href="//minhhien.com.vn"
                                                                                                target="_blank">MinhHienSolutions</a> </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button class="scroltop fa fa-arrow-up"></button>
</div>
