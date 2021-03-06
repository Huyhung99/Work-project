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
<!-- navbar start -->
<header class="header_need">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="text-left">
          <?php print node_load(245)->field_mo_ta_slider['und'][0]['value']; ?>
        </div>
      </div>
      <div class="col-md-5">
        <div class="d-none-menu-mb text-right float-right notranslate">
          <div class="d-inline">
            <a href="#"
               onclick="doGTranslate('vi|ja');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
               title="Japanese" class="nturl "><span class="anh_co_edit"><img
                  alt="Japanese" title="Japanese"
                  src="/sites/default/files/jp.jpg"></span>Jp</a>
          </div>
          <div class="d-inline">

            <a
              href="#"
              onclick="doGTranslate('vi|en');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
              title="English" class="nturl "><span class="anh_co_edit"><img
                  alt="English" title="English"
                  src="/sites/default/files/en.jpg"></span>En</a>
          </div>
          <div class="d-inline">
            <a href="#"
               onclick="doGTranslate('vi|vi');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
               title="Vietnamese"
               class="nturl  selected"><span class="anh_co_edit"><img
                  alt="Ti???ng Vi???t" title="Ti???ng Vi???t"
                  src="/sites/default/files/vi.jpg"></span>Vi</a>
          </div>
          <div class="d-inline">

            <a href="#"
               onclick="doGTranslate('vi|ko');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
               title="Korean" class="nturl ">
                <span class="anh_co_edit"><img alt="Korea" title="Korea"
                                               src="/sites/default/files/kr.jpg"></span>Kr</a>
          </div>
          <div class="d-none"><?php print render($page['header_right']); ?></div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="navbar-area">
    <nav class="navbar navbar-area navbar-expand-lg navbar-area-3">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse"
                        data-target="#realdeal_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="language-mobile d-none-menu-pc">
                <div class="thong-tin-lien-he-hearder">
                    <?php print node_load(245)->field_mo_ta_slider['und'][0]['value']; ?>
                </div>
                <div class="text-right float-right notranslate">
                    <div class="d-inline">
                        <a href="#"
                           onclick="doGTranslate('vi|ja');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
                           title="Japanese" class="nturl "><span class="anh_co_edit"><img
                                        alt="Japanese" title="Japanese"
                                        src="/sites/default/files/jp.jpg"></span>Jp</a>
                    </div>
                    <div class="d-inline">

                        <a
                                href="#"
                                onclick="doGTranslate('vi|en');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
                                title="English" class="nturl "><span class="anh_co_edit"><img
                                        alt="English" title="English"
                                        src="/sites/default/files/en.jpg"></span>En</a>
                    </div>
                    <div class="d-inline">
                        <a href="#"
                           onclick="doGTranslate('vi|vi');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
                           title="Vietnamese"
                           class="nturl  selected"><span class="anh_co_edit"><img
                                        alt="Ti???ng Vi???t" title="Ti???ng Vi???t"
                                        src="/sites/default/files/vi.jpg"></span>Vi</a>
                    </div>
                    <div class="d-inline">

                        <a href="#"
                           onclick="doGTranslate('vi|ko');jQuery(this).parent().parent().find('div.selected a').html(jQuery(this).html());return false;"
                           title="Korean" class="nturl ">
                <span class="anh_co_edit"><img alt="Korea" title="Korea"
                                               src="/sites/default/files/kr.jpg"></span>Kr</a>
                    </div>
                </div>
            </div>
            <div class="logo">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                    </a>
                <?php endif; ?>
            </div>
            <div class="collapse navbar-collapse" id="realdeal_main_menu">
                <?php print getMenuLeMinhLand() ?>
                <?php print node_load(422)->field_mo_ta_slider['und'][0]['value']; ?>
            </div>
        </div>
    </nav>
</div>

<div class="breadcrumb-area jarallax" style="background-image:url('/sites/all/themes/leminhland/assets/img/bg/4.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if ($breadcrumb||$title): ?>
                    <div class="breadcrumb-inner">
                        <?php print '<h1 class="page-title">'.$title.'</h1><ul class="page-list">
            <li><a href="'.$front_page.'">Trang ch???</a></li>
            <li>'.$title.'</li>
          </ul>'; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- footer area start -->
<div class="contact-area pd-top-60 pd-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-page-map">
                    <h1 class="title-contact">Li??n h??? v???i ch??ng t??i</h1>
                    <div class="div_contactus">

                        <?php if ($page['form_lien_he']) {
                            print html_entity_decode(render($page['form_lien_he']));
                        } ?>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nh???n th??ng tin t?? v???n</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form_thong_tin_tu_van" onsubmit="return false">
                                        <input required="required" placeholder="Nh???p h??? t??n (*)" class="form-control form-text required mb-15" type="text" id="edit-submitted-ho-ten" name="ho_ten" value="" size="60" maxlength="128">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input required="required" placeholder="Nh???p s??? ??i???n tho???i (*)" class="form-control form-text form-number required mb-15" type="text" id="edit-submitted-so-dien-thoai" name="so_dien_thoai" step="any">
                                            </div>
                                            <div class="col-md-6">
                                                <input required="required" class="email form-control  form-text form-email mb-15" placeholder="Nh???p email" type="email" id="edit-submitted-email" name="email" size="60">
                                            </div>
                                        </div>
                                        <textarea placeholder="N???i dung" required="required" class="form-control mb-15 form-textarea" id="edit-submitted-noi-dung" name="noi_dung" cols="60" rows="5"></textarea>
                                        <input  type="hidden" value="<?=md5(md5(date("YmdHi")));?>" name="token">
                                        <input type="submit"  href="#" class="btn btn-yellow form_submit_thong_tin_tu_van" value="G???i th??ng tin">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <?php if ($page['footer_col_1']) print render($page['footer_col_1']) ?>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">T??m theo v??? tr??</h4>
                    <?php print cac_quan_huyen();?>
                </div>
            </div>
            <!--<div class="col-lg-2 col-sm-6">
                <div class="widget widget_nav_menu">
                  <h4 class="widget-title">Li??n k???t</h4>
                  <?php /*print getmenu_footer();*/?>
                </div>
                <?php /*if ($page['footer_col_2']) print render($page['footer_col_2']) */?>
            </div>-->
            <div class="col-lg-3 col-sm-6">
                <?php if ($page['footer_col_3']) print render($page['footer_col_3']) ?>
            </div>
        </div>
        <div class="copy-right text-center">
            ?? <?= date('Y') ?> - MinatoHousing <i class="fa fa-heart"></i> thi???t k??? b???i <a
                    href="https://minhhien.com.vn/" target="_blank"> <span> MinhHien Solutions</span></a>.
            <?php if ($page['bottom_footer']) print render($page['bottom_footer']) ?>
        </div>
    </div>
</footer>


<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
