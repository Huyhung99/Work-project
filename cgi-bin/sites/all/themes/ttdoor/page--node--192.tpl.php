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
<?php $top52 = '' ?>
<?php if ($logged_in): ?>
    <?php $top52 = 'top52' ?>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar <?= $top52 ?>" id="mainMenu">
    <div class="container">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" class="navbar-brand" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
        <?php endif; ?>
        <!--  navbar actions -->
        <div class="main-navbar-action">
            <!-- navbar search box -->
            <div class="search-wrapper">
                <div class="search-wrapper__btn">
                    <i class="icon-search"></i>
                </div>
                <div class="search-wrapper__box">
                    <div class="search-box" id="the-basics">
                        <?php if ($page['search_block']) print render($page['search_block']); ?>
                    </div>
                </div>
            </div>
            <!-- end of navbar search box -->
            <div id="mainNavbarDropdown">
                <!-- navbar user account and cart dropdown -->
                <?php if ($page['User_Cart_dropdown']) print render($page['User_Cart_dropdown']) ?>
            </div>
            <!-- navbar user account and cart icon dropdown -->
            <?php if ($page['User_Cart_icon']) print render($page['User_Cart_icon']) ?>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <?php print getMainMenuTTdoor() ?>
        </div>
    </div>
</nav>
<div class="container header-mt">
    <div class="row">
        <div class="col-12">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb custom-breadcrumb">
                    <?php if ($breadcrumb): ?>
                        <li id="breadcrumb" class="breadcrumb-item"><?php print $breadcrumb; ?></li>
                    <?php endif; ?>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="main-content pb-80">
    <?php print $messages;?>

    <div class="container">
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <!-- contact form -->
        <div class="row" id="contactForm">
            <div class="col-lg-6">
                <div class="custom-form custom-form--box">
                    <?php if ($page['contact']) print render($page['contact']) ?>
                </div>
            </div>
            <!-- end contact form -->
            <!-- contact information -->
            <div class="col-lg-6">
                <div class="contact-info">
                    <?php if ($page['contact_info']) print html_entity_decode(render($page['contact_info'])) ?>
                </div>
                <!-- google map -->
                <div class="location">
                    <div id="map">
                        <?php if ($page['contact_map']) print html_entity_decode(render($page['contact_map'])) ?>
                    </div>
                </div>
                <!-- end google map -->
            </div>
            <!-- end contact information -->
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__top-row">
            <div class="row">
                <div class="col-lg-4 col-md-4 footer__content">
                    <?php if ($page['col1_footer']) print html_entity_decode(render($page['col1_footer'])) ?>
                </div>
                <div class="col-lg-5 col-md-5 footer__content">
                    <?php if ($page['col2_footer']) print render($page['col2_footer']) ?>
                </div>
                <div class="col-lg-3 col-md-5 footer__content">
                    <?php if ($page['col3_footer']) print html_entity_decode(render($page['col3_footer'])) ?>
                </div>
            </div>
        </div>
        <div class="copyright">
            <?php if ($page['alright_footer']) print html_entity_decode(render($page['alright_footer'])) ?>
        </div>
    </div>
</footer>

<a class="back-to-top-btn" id="back-to-top"></a>