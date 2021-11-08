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
<div id="page" class="page content">
  <!-- HEADER
============================================= -->
    <header id="header" class="header">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"  class="img-fluid"/>
                </a>
            <?php endif; ?>
            <a href="tel:0944703139" class="callusbtn"><i class="fas fa-phone"></i></a>
        </div>
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo"><?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"  class="img-fluid"/>
                        </a>
                    <?php endif; ?></div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php print getMainMenuPhuongNguyenGrp(); ?>
                </nav>	<!-- END MAIN MENU -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->
    </header>	<!-- END HEADER -->
    <?php if ($page['banner_front']) print render($page['banner_front'])?>
    <div class="container">
        <?php if ($page['top_main_content_front']) print render($page['top_main_content_front'])?>
    </div>
    <?php if ($page['video_front']) print html_entity_decode(render($page['video_front']))?>
    <?php if($page['main-content-front']) print render($page['main-content-front']); ?>
    <section id="blog-1" class="wide-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">
                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">Tin tức</h3>
                </div>
            </div>


            <!-- BLOG POSTS HOLDER -->
            <div class="row">


                <!-- BLOG POST #1 -->
                <div class="col-lg-4">
                    <div class="blog-post wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post-img">
                            [field_image]
                        </div>
                        <div class="blog-post-txt">
                            <h5 class="h5-sm steelblue-color">[title]</h5>
                            <p>[body]</p>
                        </div>
                    </div>
                </div>	<!-- END  BLOG POST #1 -->


                <!-- BLOG POST #2 -->
                <div class="col-lg-4">
                    <div class="blog-post wow fadeInUp" data-wow-delay="0.6s">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Title -->
                            <h5 class="h5-sm steelblue-color"><a href="single-post.html">Your Health Is In Your Hands</a></h5>

                            <!-- Post Data -->
                            <span>Apr 28, 2019 by <span>Dr.Jonathan Barnes</span></span>

                            <!-- Post Text -->
                            <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
                                gravida donec ipsum, at porta justo...
                            </p>

                        </div>

                    </div>
                </div>	<!-- END  BLOG POST #2 -->


                <!-- BLOG POST #3 -->
                <div class="col-lg-4">
                    <div class="blog-post wow fadeInUp" data-wow-delay="0.8s">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Title -->
                            <h5 class="h5-sm steelblue-color"><a href="single-post.html">How Weather Impacts Your Health</a></h5>

                            <!-- Post Data -->
                            <span>Apr 17, 2019 by <span>Dr.Megan Coleman</span></span>

                            <!-- Post Text -->
                            <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
                                gravida donec ipsum, at porta justo...
                            </p>

                        </div>

                    </div>
                </div>	<!-- END  BLOG POST #3 -->


            </div>	<!-- END BLOG POSTS HOLDER -->


        </div>	   <!-- End container -->
    </section>	<!-- END BLOG-1 -->
    <div class="contact">
        <div class="contact-form pt-60 pb-60">
            <?php if ($page['number_customer']) print render($page['number_customer'])?>
            <div class="row justify-content-center">

                <div class="col-lg-5 section-title">
                    <!-- Title 	-->

                    <h2 class="title-contact-form font-30 font-weight-700">KẾT NỐI VỚI BÍCH</h2>
                    <?php if ($page['contact_form_front']) print render($page['contact_form_front'])?>
                    <!-- Text -->
                </div>
            </div>
        </div>
    </div>
    <footer id="footer-1" class="bg-image footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <!-- FOOTER COPYRIGHT -->
            <div class="bottom-footer">
                <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
            </div>
        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-2 -->
</div>



