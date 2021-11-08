<?php
$banner='';
if(arg(0)=='node')
{
  if(isset($node->field_anh_banner['und'][0]['uri']))
  {
    $banner=str_replace('public://','/sites/default/files/',$node->field_anh_banner['und'][0]['uri']);
  }
}
elseif (arg(0)=='taxonomy')
{
  $taxonomy_term=taxonomy_term_load(arg(2));
  if(isset($taxonomy_term->field_anh_banner['und'][0]['uri']))
  {
    $banner=str_replace('public://','/sites/default/files/',$taxonomy_term->field_anh_banner['und'][0]['uri']);
  }
}
?>
<header class="header-style-two">
  <div class="header-wrapper">
    <div class="header-top-area bg-gradient-color d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 header-top-left-part">
            <?php if ($page['header_left']) print html_entity_decode(render($page['header_left']))?>
          </div>
          <!--                    <div class="col-lg-6 header-top-right-part text-right">-->
          <!--                        <ul class="social-links">-->
          <!--                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>-->
          <!--                        </ul>-->
          <!--                        <div class="language">-->
          <!--                            <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>-->
          <!--                            <ul class="language-dropdown">-->
          <!--                                <li><a href="#">English</a></li>-->
          <!--                                <li><a href="#">Bangla</a></li>-->
          <!--                                <li><a href="#">French</a></li>-->
          <!--                                <li><a href="#">Spanish</a></li>-->
          <!--                                <li><a href="#">Arabic</a></li>-->
          <!--                            </ul>-->
          <!--                        </div>-->
          <!--                    </div>-->
        </div>
      </div>
    </div>
    <div class="bt_blank_nav"></div>
    <div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="navbar-brand logo f-left  mrt-md-0">
                <img id="logo-image" class="img-center" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
            <div class="mobile-menu-right"></div>
            <div class="header-searchbox-style-two d-none d-xl-block">
              <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
              </div>
              <div class="show-searchbox">
                <a href="#"><i class="webex-icon-Search"></i></a>
              </div>
              <div class="toggle-searchbox">
                <form action="/tim-kiem" id="searchform-all" method="get">
                  <div>
                    <input type="text" id="s" class="form-control" placeholder="Search..." name="title">
                    <div class="input-box">
                      <input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="side-panel-content">
              <div class="close-icon">
                <button><i class="webex-icon-cross"></i></button>
              </div>
              <div class="side-panel-logo mrb-30">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
              <div class="side-info mrb-30">
                <?php print node_load(217)->field_mo_ta_slider['und'][0]['value'];?>
                <div class="side-panel-element mrb-30">
                  <?php if ($page['sidebar_front']) print render($page['sidebar_front'])?>
                </div>
              </div>
              <!--                            <h4 class="mrb-15">Các nền tảng mạng xã hội</h4>-->
              <!--                            <ul class="social-list">-->
              <!--                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>-->
              <!--                            </ul>-->
            </div>
            <div class="main-menu f-right">
              <nav id="mobile-menu-right">
                <?php print getMainMenuHiepHoiVanTai()?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="page-title-section" <?php if($banner!='') print 'style="background-image: url('.$banner.');"'?>>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <div class="page-title-content">
          <h1 class="title text-white"><?php print $title; ?></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><h2 class="element-invisible">Bạn đang ở đây</h2><div id="breadcrumb"><a href="/">Trang chủ</a></div> </li>
              <li class="breadcrumb-item active" aria-current="page"><?php print $title; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-silver-light price-section pdt-50 pdb-50">
  <div class="container-fluid">
    <?php print render($page['content']); ?>
  </div>
</section>

<footer class="footer">
  <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <?php print node_load(219)->field_mo_ta_slider['und'][0]['value'];?>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="widget footer-widget">
            <h5 class="widget-title text-white mrb-30">LIÊN KẾT</h5>
            <?php print getMenuFooter()?>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="text-center">
            <span class="text-light-gray">© 2021 Thiết kế bởi <a class="text-primary-color" target="_blank" href="//minhhien.com.vn"> MinhHien Solutions</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
  <i class="fab fa-angle-up"></i>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="du_lieu_xly">

        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tìm kiếm hội viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form_page">
          <?php if($page['search_export']) print render($page['search_export'])?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal_excel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Tải danh sách hội viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tai_xuong_excel">
          <div class="lds-dual-ring"></div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
