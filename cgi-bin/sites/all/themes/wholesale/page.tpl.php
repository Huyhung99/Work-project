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
<?php dpm($page)?>
<?php print render($page['content']['metatags']); ?>
<div id="page">
    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img width="100" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <nav class="col-xl-7 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                        <img width="100" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                    </a>
                                <?php endif; ?>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                            <?php print getMainMenuWholesale(); ?>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                        <?php print html_entity_decode(render($page['hotline_block'])); ?>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <?php if($page['categories']) print render($page['categories']); ?>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <?php if($page['search_custom']) print render($page['search_custom']); ?>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <?php if($page['drop_cart']) print render($page['drop_cart']); ?>
                            <?php if($page['sign_in']) print html_entity_decode(render($page['sign_in'])); ?>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <?php if($page['search_mob_wp']) print render($page['search_mob_wp']); ?>
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        <div class="top_banner">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                <div class="container">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb" class="breadcrumbs"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <img src="/sites/default/files/deathlessvogue-mac-cosmetics.jpg" class="img-fluid" alt="Wholesale">
        </div>
        <!-- /top_banner -->
        <div id="stick_here"></div>
        <!-- /toolbox -->
        <?php print $messages; ?>
        <div class="container margin_30">
            <div class="row">
                <?php $col = 12;?>
                <?php if ($page['sidebar_first']): ?>
                    <?php $col = 9;?>
                <?php endif;?>
                <div class="col-lg-<?=$col?>">
                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    <?php print render($page['content']); ?>
                </div>
                <?php if ($page['sidebar_first']): ?>
                    <aside class="col-lg-3" id="sidebar_fixed">
                        <?php print render($page['sidebar_first']); ?>
                    </aside>
                <?php endif;?>
            </div>
        </div>
    </main>
    <!--/main-->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <?php if($page['col1_footer']) print html_entity_decode(render($page['col1_footer'])) ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php if($page['col2_footer']) print html_entity_decode(render($page['col2_footer'])) ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php if($page['col3_footer']) print html_entity_decode(render($page['col3_footer'])) ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php if($page['col4_footer']) print html_entity_decode(render($page['col4_footer'])) ?>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row ">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#" title="Terms and conditions">Terms and conditions</a></li>
                        <li><a href="#" title="Privacy">Privacy</a></li>
                        <li><span>© <?=date("Y")?> Wholesale</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--/footer-->
</div>


