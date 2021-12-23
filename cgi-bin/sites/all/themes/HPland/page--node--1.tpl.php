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
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-blue">
    <div class="logo mr-30">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
        <?php endif; ?>
    </div>
    <button class="navbar-toggler toggle-btn mt-5px" type="button">
        <span class="icon-left"></span>
        <span class="icon-right"></span>
    </button>
    <div class="pl-10 collapse navbar-collapse hidden-sm" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
                <input class="form-control modified input-search-map" placeholder="Nhập địa chỉ, tọa độ cần tra cứu">
            </div>
            <a id="btn-loc-bds">
                <i class="fas fa-filter"></i> Lọc tin BĐS
            </a>
        </form>
        <div class="noi_hien_thi_form"></div>
        <div class="menu_2_trang_chu">
            <?php print getMenu2LeMinhLand();?>
        </div>
    </div>
</nav>
<div class="chuyen_vi_tri d-none">
  <div class="ktra_form" id="TimKiemSPPC">
    <div class="d-flex justify-content-between">
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Phân loại
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-phan-loai">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="mua-ban">
                <input type="checkbox" class="form-check-input" value="Mua bán" id="mua-ban"> Mua bán
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giá tiền
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-gia-tien">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="thoa-thuan">
                <input type="checkbox" class="form-check-input" value="Thỏa thuận" id="thoa-thuan"> Thỏa thuận
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label" for="tu0den2">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="tu0den2">
                <= 2 triệu
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Diện tích
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-dien-tich">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="duoi20">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="duoi20">
                < 20 m²
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown">
        <a class="btn-submit" href="#">
          Tìm kiếm
        </a>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="san-pham-tim-kiem" value="<?=implode(',', isset($_SESSION['san_pham']) ? $_SESSION['san_pham'] : [])?>">
<div class="breadcrumb-area jarallax" style="background-image:url(/sites/default/files/phoi-canh-du-an-the-minato-3.jpeg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if ($breadcrumb||$title): ?>
          <div class="breadcrumb-inner">
            <?php print '<h1 class="page-title">'.$title.'</h1><ul class="page-list">
            <li><a href="'.$front_page.'">Trang chủ</a></li>
            <li>'.$title.'</li>
          </ul>'; ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- footer area start -->
<div class="contact-area pd-top-100 pd-bottom-65">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="contact-page-map">
          <?php if ($page['form_lien_he']) {
            print html_entity_decode(render($page['form_lien_he']));
          } ?>
        </div>
      </div>
      <div class="col-lg-4">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>
<?php print getFooterHPLand($page)?>
