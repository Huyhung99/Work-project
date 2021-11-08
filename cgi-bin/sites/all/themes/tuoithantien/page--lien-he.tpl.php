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
<?php
$bg = '';
?>
<div id="page" class="page">
    <header id="header" class="header">
        <!-- MOBILE HEADER -->

        <div class="wsmobileheader d-none clearfix ">
            <a href="#" class="btn-toogle-sidebar"></a>
            <span class="smllogo">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
      </span>
            <div class="d-sm-none">
                <?php if($page['headertopleft']) print html_entity_decode(render($page['headertopleft'])) ?>
            </div>
            <?php if($page['search_block']): ?>
                <div class="d-md-none bgc-orange">
                    <div class="search-block search-block-front">
                        <?php print render($page['search_block']); ?>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <div class="wsmobileheader-clone  d-none clearfix">
            <a href="#" class="btn-toogle-sidebar"></a>
            <span class="smllogo">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-1">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
            </span>
            <?php if($page['search_block']): ?>
                <div class="d-md-none search-block-clone">
                    <?php print render($page['search_block']); ?>
                </div>
            <?php endif;?>
        </div>

        <!-- HEADER STRIP -->
        <div class="headtoppart bg-blue clearfix">
            <div class="headerwp clearfix">

                <!-- Address -->
                <div class="headertopleft">
                    <?php if($page['headertopleft']) print html_entity_decode(render($page['headertopleft'])) ?>
                </div>

                <!-- Social Links -->
                <div class="headertopright">
                    <?php if($page['headertopright']) print html_entity_decode(render($page['headertopright'])) ?>
                </div>

            </div>

        </div>	<!-- END HEADER STRIP -->
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

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php print getMainMenuPhuongNguyenGrp(); ?>
                </nav>	<!-- END MAIN MENU -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </header>
    <!-- END HEADER -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <a href="#" class="btn-toogle-sidebar"></a>
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Title -->
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title h4-sm steelblue-color" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php if ($breadcrumb): ?>
                                    <li class="breadcrumb-item"><?php print str_replace(' » ','<i class="fas fa-caret-right"></i>',$breadcrumb); ?></li>
                                <?php endif; ?>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>  <!-- End row -->

        </div>	<!-- End container -->
        <?php if($page['search_block']): ?>
            <div class="d-md-none ">
                <div class="search-block search-block-front">
                    <?php print render($page['search_block']); ?>
                </div>
            </div>
        <?php endif;?>
    </div>	<!-- END BREADCRUMB -->


    <!--    body-->
  <div id="blog-page" class="wide-40 blog-page-section division <?= $bg ?>">
    <div class="container">
      <div class="bg-white">
        <div class="row">
          <?php $col = 12 ?>
          <?php if ($page['sidebar_first']): ?>
            <?php $col = 8 ?>
          <?php endif; ?>
          <!-- SIDEBAR -->
          <?php if ($page['sidebar_first']): ?>
            <aside id="sidebar" class="col-md-4 col-lg-4">
              <?php print html_entity_decode(str_replace('{{fas fa-long-arrow-alt-right}}', '<i class="fas fa-long-arrow-alt-right d-none-mb"></i>',
                str_replace('{{fas fa-question-circle}}', '<i class="fas fa-question-circle"></i>', render($page['sidebar_first'])))); ?>
            </aside>
          <?php endif; ?>
          <!-- END SIDEBAR -->
          <div class=" col-md-<?= $col ?> col-lg-<?= $col ?>">
            <?php if ($tabs): ?>
              <div
                class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

            <?php if ($action_links): ?>
              <ul
                class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <div class="tab-content">
              <div class="tab-pane active" id="dang-ky-tham-quan-truong"
                   role="tabpanel"
                   aria-labelledby="dang-ky-tham-quan-truong-tab">
                <?php if ($page['dang_ky_tham_quan_truong']) {
                  print render($page['dang_ky_tham_quan_truong']);
                } ?>
              </div>
              <div class="tab-pane" id="dang-ky-tuyen-sinh" role="tabpanel"
                   aria-labelledby="dang-ky-tuyen-sinh-tab">
                <?php if ($page['dang_ky_tuyen_sinh']) {
                  print render($page['dang_ky_tuyen_sinh']);
                } ?>
                  <p class="pl-100">Liên hệ đặt lịch hẹn ứng tuyển trực tiếp hoặc đăng kí ứng tuyển theo mẫu phía trên. Chúng tôi sẽ phản hồi theo thông tin bạn gửi.</p>
              </div>
              <div class="tab-pane" id="brochure" role="tabpanel"
                   aria-labelledby="brochure-tab">
                <?php if ($page['broucher']) {
                  print render($page['broucher']);
                } ?>
              </div>
              <div class="tab-pane" id="cau-hoi-thuong-gap" role="tabpanel"
                   aria-labelledby="cau-hoi-thuong-gap-tab">
                <?php if ($page['cau_hoi_thuong_gap']) {
                  print render($page['cau_hoi_thuong_gap']);
                } ?>
              </div>
              <div class="tab-pane" id="hoi-dap" role="tabpanel"
                   aria-labelledby="hoi-dap-tab">
                <?php if ($page['hoi_dap']) {
                  print render($page['hoi_dap']);
                } ?>
              </div>
            </div>

          </div>

        </div>  <!-- End row -->

        <?php if ($page['left_bottom_content'] || $page['right_bottom_content']): ?>
          <div class="row">
            <?php if ($page['left_bottom_content']): ?>
              <div class="col-md-4">
                <?php print html_entity_decode(str_replace('{{fas fa-map-marker-alt}}', '<i class="fas fa-map-marker-alt "></i>',
                  str_replace('{{fas fa-phone}}', '<i class="fas fa-phone "></i>',
                    str_replace('{{fas fa-envelope}}', '<i class="fas fa-envelope "></i>',
                      str_replace('{{far fa-file-alt}}', '<i class="far fa-file-alt "></i>', render($page['left_bottom_content'])))))) ?>
              </div>
            <?php endif; ?>
            <?php if ($page['right_bottom_content']): ?>
              <div class="col-md-8">
                <?php print render($page['right_bottom_content']) ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($page['bottom_content'])
          print render($page['bottom_content']) ?>
      </div>
    </div>   <!-- End container -->
  </div>  <!-- END BLOG PAGE CONTENT -->
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <?php if ($page['left_form_dang_ky'])
        print render($page['left_form_dang_ky']) ?>
    </div>
    <div class="col-md-6">
      <?php if ($page['form_dang_ky'])
        print render($page['form_dang_ky']) ?>
    </div>
  </div>
</div>
<div class="modal fade popup-cauhoi" id="exampleModal" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close bthoidap" data-dismiss="modal"
              aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <?php if ($page['form_dat_cau_hoi']) {
          print str_replace('<input class="webform-submit button-primary form-submit" type="submit" name="op" value="Đặt câu hỏi" />','<a class="webform-submit hien_pup_up button-primary form-submit" data-toggle="modal" data-target="#pop_up">Đặt câu hỏi</a>',render($page['form_dat_cau_hoi']));
          } ?>
      </div>
    </div>
  </div>
</div>
<!--service-->
<footer id="footer-1" class="bg-image pt-30 footer division">
    <div class="container">
        <!-- FOOTER CONTENT -->
        <div class="row">
            <!-- FOOTER INFO -->
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-5">
                        <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ; ?>
                    </div>
                    <div class="col-md-4 	d-none d-sm-block">
                        <?php print getMenuOther('menu-col-1-menu'); ?>
                    </div>
                    <div class="col-md-3 	d-none d-sm-block">
                        <?php print getMenuOther('menu-col-2-menu'); ?>
                    </div>
                </div>
            </div>	<!-- END FOOTER INFO -->
            <!-- FOOTER COMPANY LINKS -->
            <div class="col-md-5">
                <?php if($page['col_2_footer']) print html_entity_decode(render($page['col_2_footer'])) ; ?>
            </div>
            <!-- FOOTER NEWSLETTER FORM -->
        </div>
        <!-- END FOOTER CONTENT -->

        <!-- FOOTER COPYRIGHT -->
        <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
    </div>	   <!-- End container -->
</footer>	<!-- END FOOTER-2 -->  <!-- END FOOTER-2 -->


<div class="modal fade popup-cauhoi" id="hien_pop_up" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close bthoidap" data-dismiss="modal"
              aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        Hiển thịhành công
      </div>
    </div>
  </div>
</div>
