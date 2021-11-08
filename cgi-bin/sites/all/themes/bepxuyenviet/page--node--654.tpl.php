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
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb" class="breadcrumb-list"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main-content-wrap start -->
    <div class="contact-form-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-wrap">
                        <div class="contact-title mb-30">
                            <h3 class="text-uppercase">Liên hệ</h3>
                        </div>
                        <?php if ($page['contact_info']) print html_entity_decode(render($page['contact_info']))?>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="contact-info-wrap">
                        <div class="contact-us-from-wrap">
                            <?php if ($page['registration_form']) print render($page['registration_form'])?>
                        </div>
                    </div>
                </div>
            </div>
          <div class="content-page">
            <h2 class="text-center title_dang_ki_thong_tin">Đăng kí thông tin</h2>
            <?php
            webform_node_view(node_load(1965),'full');
            print theme_webform_view(node_load(1965)->content);
            ?>
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
</div>