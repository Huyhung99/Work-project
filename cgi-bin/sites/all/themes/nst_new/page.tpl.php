<?php
global $language;
$name_language = $language->language;
if ($name_language == 'en'){
  $path = '/en/search-key';
}else{
  $path = '/vi/tim-kiem';
}
$arg=arg(0);
$abc='';
if($arg=='search-key' || $arg=='tim-kiem')
{
  $abc='edit_search';
}
else
{
  $abc='';
}
?>
<header class="header-style-two">
  <div class="header-wrapper">
    <div class="header-top-area bg-gradient-color d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 header-top-left-part">
            <?php if ($page['header-left']) print render($page['header-left'])?>
            <span class="address"><i class="webexflaticon flaticon-mail"></i> <a href="tel:nst@nstmarines.com">nst@nstmarines.com</a></span>
            <span class="phone"><i class="webexflaticon flaticon-telephone"></i> <a href="mailto:02553555218">+84 255 3 555 218</a></span>
          </div>
          <div class="col-lg-6 header-top-right-part text-right">
            <?php if($abc==''):?>
              <div class="language <?php print $abc;?>" <?php if($abc){print ' arg="'.$arg.'"';}?>>
                <?php if ($page['lang']) print render($page['lang'])?>
              </div>
            <?php else:?>
            <div class="language <?php print $abc;?>" <?php if($abc){print ' arg="'.$arg.'"';}?>>
              <ul class="language-switcher-locale-url"><li class="vi first"><img class="language-icon" typeof="foaf:Image" src="https://www.nstmarines.com/sites/all/themes/nst/flags/vi.png" width="24" height="12" alt="Tiếng Việt" title="Tiếng Việt"></li>
                  <li class="en last active"><img class="language-icon" typeof="foaf:Image" src="https://www.nstmarines.com/sites/all/themes/nst/flags/en.png" width="24" height="12" alt="English" title="English"></li>
                </ul>
            </div>
            <?php endif;?>
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
                <form action="<?php print $path?>" id="searchform-all" method="get">
                  <div>
                    <input type="text" id="s" class="form-control" placeholder="Nhập nội dung tìm kiếm" name="title">
                    <div class="input-box">
                      <input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="menu_lang_mobile">
              <div class="language <?php print $arg;?>">
                <?php if ($page['lang']) print render($page['lang'])?>
              </div>
            </div>
            <div class="search_mobile">
              <div class="show-searchbox-edit">
                <i class="webex-icon-Search"></i>
              </div>
              <div class="form_search_mobile">
                <form action="<?=$path?>" id="searchform-all" method="get">
                  <div>
                    <input type="text" id="s" class="form-control" placeholder="Nhập nội dung tìm kiếm" name="title">
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
                    <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>Số 1 Cụm Công Nghiệp Quán Trữ, Quán Trữ, Kiến An, Hải Phòng</li>
                    <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto:apfood898@gmail.com">apfood898@gmail.com</a></li>
                    <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:0915170898">0915.170.898</a></li>
                  </ul>
                </div>
                <div class="side-panel-element mrb-30">
                  <h4 class="mrb-15">Hình ảnh</h4>
                  <?=views_embed_view('block_front','block_hinh_anh_hoat_dong')?>
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
                <?php print getMainMenuAnhPhatFood()?>
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

<section class="price-section pdt-50 pdb-50">
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
              <div class="widget sidebar-widget widget-search">
                <form action="'.$path.'" class="search-form" method="get">
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
      <?php if($page['content_spam_khac']):?>
      <div class="col-md-12">
        <?= render($page['content_spam_khac'])?>
      </div>
      <?php endif;?>
    </div>
  </div>
</section>

<?php
global $language;
$vi_en = $language->language;
?>
<footer class="footer">
  <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <?php if ($page['footer_col_1'] && $vi_en=="en") print html_entity_decode(render($page['footer_col_1']))?>
          <?php if ($page['footer_col_2'] && $vi_en=="vi") print html_entity_decode(render($page['footer_col_2']))?>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-6">
          <div class="widget footer-widget">
            <h5 class="widget-title text-white mrb-30"><?php if($vi_en=='en'){print 'LINK';} else{print 'LIÊN KẾT';}?></h5>
            <?php print getMenuFooter()?>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="widget footer-widget">
            <h5 class="widget-title text-white mrb-30"><?php if($vi_en=='en'){print 'NEW POST';} else{print 'BÀI VIẾT MỚI NHẤT';}?></h5>
            <?php if ($page['footer_col_4']) print render($page['footer_col_4'])?>
          </div>
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
