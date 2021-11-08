<header class="header-style-two">
    <div class="header-wrapper">
        <div class="header-top-area bg-green d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 header-top-left-part">
                        <?php if ($page['header_left']) print html_entity_decode(render($page['header_left']))?>
                    </div>
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
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">Địa chỉ văn phòng</h4>
                                    <ul class="list-items">
                                        <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>Thôn Giữa Lương Quy, xã Lê Lợi, huyện An Dương, HP</li>
                                        <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto: phamgiahung@gmail.com">phamgiahung@gmail.com</a></li>
                                        <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:0900034042">0900.034.042</a></li>
                                    </ul>
                                </div>
                                <div class="side-panel-element mrb-30">
                                    <?php if ($page['sidebar_front']) print render($page['sidebar_front'])?>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                                <?php print getMainMenuFront()?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="page-title-section">
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

<section class="price-section pdt-50 pdb-50 pdb-sm-30">
  <div class="container">
    <div class="row">
      <?php $col = 12; ?>
      <?php if ($page['sidebar-right']): ?>
        <?php $col = 9;?>
      <?php endif; ?>
      <div class="col-12 col-lg-<?=$col?>">
        <?php print $messages; ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
      <?php if ($page['sidebar-right']): ?>
        <div class="col-12 col-lg-3">
          <?php
          $value_title='';
          if(isset($_GET['title']))
          {
            $value_title=$_GET['title'];
          }
          $str='
            <div class="news-sidebar-widget">
              <div class="widget sidebar-widget widget-search mrb-30">
                <form action="/tim-kiem" class="search-form" method="get">
                  <label>
                    <input name="title" type="text" value="'.$value_title.'" class="search-field" placeholder="Tìm kiếm...">
                  </label>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
						    </div>
						</div>
						'?>
          <?php print str_replace('{{-tim-kiem-}}',$str,render($page['sidebar-right'])); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
    <div class="container">
      <div class="row">
          <div class="col-xl-5 col-lg-6 col-md-6">
              <?php if ($page['img_footer']) print render($page['img_footer'])?>
              <?php if ($page['footer_col_1']) print render($page['footer_col_1'])?>
          </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
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
