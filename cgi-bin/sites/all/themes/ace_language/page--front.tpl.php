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

<h1 class="hidden">Trung tâm Tiếng Anh số 1 Hải Phòng</h1>

<header class="header">
    <div class="header-top hidden-tablet-landscape red-bg">
        <div class="container">
            <div class="header-top-content display-flex ">
                <?php if($page['left-topbar']) print render($page['left-topbar']); ?>

                <?php if($page['right-topbar']) print render($page['right-topbar']); ?>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
        <div class="container">
            <div class="header-bottom">
                <div class="header-bottom-content display-flex">
                    <div class="logo">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-desktop">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="menu-search display-flex">
                        <nav class="menu">
                            <div>
                        <?php print getMainMenu(); ?>
                            </div>
                        </nav>

                        <div class="search-box">
                            <form action="/search" method="get" id="views-exposed-form-taxonomy-term-page-1" accept-charset="UTF-8">
                                <input type="text" placeholder="Tìm kiếm" name="title">
                                <div class="search-icon font-color-white display-flex-center">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </form>
                            <?php if($page['lang']) print render($page['lang']); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-tablet-landscape-up header-mobile">
        <div class="header-top-mobile">
            <div class="container">
                <div class="logo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-mobile">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>

                <div class="search-box">
                    <form action="/search" method="get" id="views-exposed-form-taxonomy-term-page-1" accept-charset="UTF-8">
                        <input type="text" placeholder="Tìm kiếm" name="title">
                        <div class="search-icon font-color-white display-flex-center">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </form>

                </div>


                <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="au-nav-mobile">


            <?php print getMainMenu(); ?>


        </div>
        <!-- <div class="clear"></div> -->
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-top-content display-flex">
                    <?php if($page['left-topbar']) print render($page['left-topbar']); ?>

                    <?php if($page['right-topbar']) print render($page['right-topbar']); ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</header>

<main>
    <?php if($page['main-content']) print render($page['main-content']); ?>

    <section class="sign-up-2 section-padding-large js-waypoint">
        <div class="container">
            <div class="sign-up-content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 register-now">
                        <?php if($page['about-us']) print render($page['about-us']); ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="sign-up-form">
                            <div class="form-heading">
                                <h3><?php print t("Contact Us")?></h3>
                            </div>
                            <?php if($page['form-dang-ky']) print render($page['form-dang-ky']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-large">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php if($page['su-kien']) print render($page['su-kien']); ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php if($page['tin-tuc']) print render($page['tin-tuc']); ?>
                </div>
            </div>
        </div>
    </section>

    <?php if($page['bt-main-content']) print render($page['bt-main-content']); ?>
    
</main>

<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-footer">
                        <?php if($page['footer-col-1']) print render($page['footer-col-1']); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-7 col-sm-12 col-12 item-footer">
                        <?php if($page['footer-col-2']) print render($page['footer-col-2']); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12 item-footer">
                        <?php if($page['footer-col-3']) print render($page['footer-col-3']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <?php if($page['coppyright']) print render($page['coppyright']); ?>
        </div>
    </div>
</footer>

<div id="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>
