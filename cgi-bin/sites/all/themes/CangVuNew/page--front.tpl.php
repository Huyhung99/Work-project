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
;
?>
<?php print render($page['content']['metatags']); ?>
<div id="page" class="page">
    <!-- HEADER
  ============================================= -->
    <header id="header-2" class="header ">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo">
                <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo1">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
            </span>
        </div>
        <?php if($page['header_slider']) print render($page['header_slider'])?>


        <!-- HEADER WIDGETS -->
        <div class="hero-widget clearfix">
            <div class="container">
                <?php if($page['header_banner']) print html_entity_decode(render($page['header_banner'])) ?>
            </div>
        </div>	<!-- END HEADER WIDGETS -->
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="wsmenu clearfix">
                            <?php print getMainMenuPhuongNguyenGrp(); ?>
                        </nav>	<!-- END MAIN MENU -->
                    </div>
                    <div class="col-md-3">
<!--                        <div class="search">-->
<!--                            --><?php //if ($page['search']) print render($page['search'])?>
<!--                            <div class="search-advanced">-->
<!--                                --><?php //if ($page['btn-search']) print html_entity_decode(render($page['btn-search']))?>
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                </div>
                <!-- MAIN MENU -->


                <!-- NAVIGATION MENU BUTTON -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->
    </header>	<!-- END HEADER -->
    <div id="block-time-now">
        <div class="container">
            <?php if ($page['date']) print render($page['date'])?>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <?php if($page['col1_top_main_content']) print render($page['col1_top_main_content'])?>
            </div>
            <div class="col-md-4">
                <?php if($page['col3_top_main_content']) print render($page['col3_top_main_content'])?>
            </div>
        </div>
<!--        --><?php //if($page['banner_1']) print render($page['banner_1']); ?>
        <div class="row">
            <div class="col-md-3">
                <div class="block-front">
                    <?php print getMenuLeftFront()?>
                </div>
                <div class="search">
                    <?php if ($page['search']) print render($page['search'])?>
                    <div class="search-advanced">
                        <?php if ($page['btn-search']) print html_entity_decode(render($page['btn-search']))?>
                    </div>
                </div>
                <?php if($page['col1_inner_main_content']) print render($page['col1_inner_main_content'])?>
                <?php if($page['col1_html_inner_main_content']) print html_entity_decode(render($page['col1_html_inner_main_content']))?>
                <div class="mt-30">
                    <?php print getMenuLinkWebFront()?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <?php if ($page['middle_content_front']) print render($page['middle_content_front'])?>
                        <!--                <ul class="nav nav-tabs" id="myTab" role="tablist">-->
                        <!--                    <li class="nav-item">-->
                        <!--                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">--><?php //print t('DOMESTIC MARINE NEWS') ?><!--</a>-->
                        <!--                    </li>-->
                        <!--                    <li class="nav-item">-->
                        <!--                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">--><?php //print t('INTERNATIONAL MARINE NEWS') ?><!--</a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--                <div class="tab-content" id="myTabContent">-->
                        <!--                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                        <!--                        --><?php //if($page['col2_top_left_inner_main_content']) print render($page['col2_top_left_inner_main_content'])?>
                        <!--                        --><?php //if($page['col2_left_inner_main_content']) print render($page['col2_left_inner_main_content'])?>
                        <!--                    </div>-->
                        <!--                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                        <!--                        --><?php //if($page['col2_top_right_inner_main_content']) print render($page['col2_top_right_inner_main_content'])?>
                        <!--                        --><?php //if($page['col2_right_inner_main_content']) print render($page['col2_right_inner_main_content'])?>
                        <!--                    </div>-->
                        <!--                </div>-->

                    </div>
                    <div class="col-md-6">
                        <?php if($page['col3_html_inner_main_content']) print html_entity_decode(render($page['col3_html_inner_main_content']))?>
                        <?php if($page['left_content_front']) print render($page['left_content_front'])?>
                    </div>
                    <div class="col-md-12">
                        <?php if($page['banner_2']) print render($page['banner_2']); ?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($page['thu_tuc_hanh_chinh_front']) print render($page['thu_tuc_hanh_chinh_front'])?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($page['van_ban_moi_front']) print render($page['van_ban_moi_front'])?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?php if($page['col1_bottom_bottom_main_content']) print html_entity_decode(render($page['col1_bottom_bottom_main_content'])) ?>
            </div>
            <div class="col-md-9">
                <?php if($page['col2_bottom_bottom_main_content']) print render($page['col2_bottom_bottom_main_content'])?>
            </div>
        </div>
<!--        <div id="block-both-slider-doanh-nghiep">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3">--><?php //if($page['block_doanh_nghiep_list']) print render($page['block_doanh_nghiep_list'])?><!--</div>-->
<!--                <div class="col-md-9">-->
<!--                    --><?php //if($page['block_doanh_nghiep_slider']) print render($page['block_doanh_nghiep_slider'])?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-md-3">
                <?php if($page['left_sidebar_front_bottom_content']) print render($page['left_sidebar_front_bottom_content'])?></div>
            <div class="col-md-9">
                <?php if($page['right_sidebar_front_bottom_content']) print render($page['right_sidebar_front_bottom_content'])?>
            </div>
        </div>

        <?php if($page['main-content-front']) print render($page['main-content-front']); ?>
    </div>

    <footer id="footer-1" class="ptb-30 footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <?php if ($page['content_footer']) print html_entity_decode(render($page['content_footer']))?>

            <!-- FOOTER COPYRIGHT -->
        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-2 -->
</div>
