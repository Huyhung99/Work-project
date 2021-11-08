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
    <?php if($page['main_front']) print (render($page['main_front'])) ?>
    <div class="mainmenu-area " id="main_h">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-12">
                    <div class="mainmenu">
                        <nav>
                            <?=getMainMenuMinhHienStore();?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php print $messages; ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($breadcrumb||$title): ?>
                        <div id="breadcrumb" class="breadcrumb-list"><?php $breadcrumb ? print str_replace(' » ',' > ',$breadcrumb) : print '<div class="breadcrumb"><a href="'.$front_page.'">Trang chủ </a> » '.$title.'</div>'; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- breadcrumb-area start -->
    <div class="page-title-wrapper mt-20">
        <div class="container">
            <?php if ($title):?>
                <h1 class="title-page-sub"><?=$title?></h1>
            <?php endif;?>
        </div>
    </div>
    <div class="bedroom-all-product-area pb-30 pt-10">
        <div class="container">
            <div class="intro">
                <?php
                print node_load(2411)->body['und'][0]['value'];
                ?>
                <div class="fade-out"></div>
            </div>
            <p class="read-more text-center"><a href="#" class="button btn btn-primary">Xem thêm</a></p>
            <div class="row mt-50">
                <?php
                $col = 12;
                if ($page['sidebar_right']):?>
                    <?php $col = 9?>
                <?php endif;?>
                <?php
                if ($page['sidebar_right']):  ?>
                    <div class="col-md-3 order-2">
                        <?php print str_replace('{{-chuyen-muc-edit-}}',sidebar_right_chuyen_muc(),render($page['sidebar_right']));?>
                    </div>
                <?php endif;?>
                <div class="col-md-<?= $col?> order-1">
                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    <?php print render($page['content']); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
    <div class="footer-area ptb-80 pd-tb-md-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 mar_b-30">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if($page['image_footer']) print html_entity_decode(render($page['image_footer'])) ?>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <?php if($page['col_1']) print html_entity_decode(render($page['col_1'])) ?>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <?php if($page['col_4']) print html_entity_decode(render($page['col_4'])) ?>
                        </div>

                    </div>
                    <div class="d-none d-md-block d-lg-none">
                        <hr>
                    </div>
                    <div class="d-md-none d-md-block d-lg-none mt-30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30">
                                <?php if($page['col_2']) print html_entity_decode(render($page['col_2'])) ?>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30">
                                <?php if($page['col_3']) print html_entity_decode(render($page['col_3'])) ?>
                            </div>
                        </div>
                    </div>
                    <?php if($page['col_1_bootom']) print html_entity_decode(render($page['col_1_bootom'])) ?>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30 d-none d-lg-block"><?php if($page['col_2']) print html_entity_decode(render($page['col_2'])) ?></div>
                <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30 d-none d-lg-block"><?php if($page['col_3']) print html_entity_decode(render($page['col_3'])) ?></div>
            </div>
        </div>
    </div>

    <!-- footer-area-end -->
    <!-- .copyright-area-start -->
    <div class="copyright-area">
        <?php if($page['bottom_footer']) print html_entity_decode(render($page['bottom_footer'])) ?>
    </div>
</div>
