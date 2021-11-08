<?php
global $language;
$lang_name = $language->language;
if ($lang_name == 'vi'){
  $slogan = 'nơi hội tụ tinh hoa và đẳng cấp';
  $member = 'Thành viên';
  $path_member = '/vi/thanh-vien';
  $news = 'Nhận tin';
  $book = 'Đặt lịch hẹn';

  $contact = 'Liên hệ';
  $path_contact = '/vi/lien-he';

  $path_showroom = '/vi/show-room';

  $path_search = '/vi/tim-kiem-san-pham';

}elseif ($lang_name == 'en'){
  $slogan = 'where quintessence and class converge';
  $member = 'Members';
  $path_member = '/en/members';
  $news = 'Receive news';
  $book = 'Make an appointment';

  $contact = 'Contact';
  $path_contact = '/en/contact';

  $path_showroom = '/en/show-room';

  $path_search = '/en/product-search';

}
global $user;
?>
<div class="register-form white">
  <?php
  webform_node_view(node_load(90),'full');
  print theme_webform_view(node_load(90)->content);
  ?>
  <div class="overlay-form"></div>
</div>
<div class="showroom-form white">
  <?php
  webform_node_view(node_load(94),'full');
  print theme_webform_view(node_load(94)->content);
  ?>
  <div class="overlay-form"></div>
</div>
<header class="header">
    <div class="logo"></div>
    <nav class="navigation">
        <div class="nav">
            <?= getNavigationNoiThat() ?>
        </div>
    </nav>
    <div class="overlay-menu"></div>
    <div class="right-header">
        <?= getMenuNoiThat() ?>
        <div class="seach-top">
            <a class="search-but" href="javascript:void(0);">
                <svg
                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                    <path fill="currentColor"
                          d="M17.9,29.9L12,35.8c-0.9,0.9-0.9,2.4,0,3.4c0.9,0.9,2.4,0.9,3.4,0l5.9-5.9c-0.7-0.4-1.4-0.8-2-1.4C18.7,31.3,18.2,30.6,17.9,29.9z"></path>
                    <path fill="currentColor"
                          d="M37.7,13.4c-4.8-4.8-12.7-4.8-17.5,0s-4.8,12.6,0,17.4c4.8,4.8,12.7,4.8,17.5,0C42.5,25.9,42.5,18.2,37.7,13.4z M35.5,28.7c-3.7,3.7-9.6,3.7-13.3,0s-3.7-9.5,0-13.2c3.7-3.7,9.6-3.7,13.3,0C39.2,19,39.2,25,35.5,28.7z"></path>
                </svg>
            </a>
            <div class="search-form">
                <div class="form-row-search">
                    <form action="<?=$path_search?>" class="search-id-form"  method="get">
                        <input type="text" name="title" data-holder="Tìm kiếm..." value="Tìm kiếm..."
                               data-default="Tìm kiếm...">
                        <button type="submit" class="d-none">Tìm</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="language">
            <?php if ($page['lang']) print render($page['lang'])?>
            <!--            <form id="change_lang" enctype="multipart/form-data" method="post" action="index.html">-->
            <!--                <ul>-->
            <!--                    <li>-->
            <!--                        <a href="javascript:void(0);" class="en"-->
            <!--                           onclick="$('input[name=\'language_code\']').attr('value', 'en').submit();var tmp_url = document.URL;if(tmp_url=='http://v-italy.vn/'){$('input[name=\'language_code\']').attr('value', 'en').submit();$('input[name=\'redirect\']').attr('value', 'http://v-italy.vn/en/').submit();$('#change_lang').submit();return false;}else{var tmp_url_change = tmp_url.replace('/vi/', '/en/');$('input[name=\'redirect\']').attr('value', tmp_url_change).submit();;$('#change_lang').submit();return false;}">en </a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <input type="hidden" value="" name="language_code">-->
            <!--                <input type="hidden" value="1" name="is_change_lang">-->
            <!--                <input id="changlanguage_redirect" type="hidden" value="http://v-italy.vn/" name="redirect">-->
            <!--            </form>-->
        </div>
    </div>
    <div class="nav-click">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
            <rect class="rect" fill="currentColor" x="15.6" y="16.3" width="26" height="3"/>
            <rect class="rect" fill="currentColor" x="8.6" y="22.8" width="33" height="3"/>
            <rect class="rect" fill="currentColor" x="8.6" y="29.2" width="33" height="3"/>
            <path class="close-click" fill="currentColor" d="M34.7,15.9l-1.4-1.4L26.9,21c-0.9,0.9-2.3,0.9-3.3,0l-6.5-6.5l-1.4,1.4l6.5,6.5c0.9,0.9,0.9,2.3,0,3.3l-6.5,6.5
l1.4,1.4l6.5-6.5c0.9-0.9,2.3-0.9,3.3,0l6.5,6.5l1.4-1.4l-6.5-6.5c-0.9-0.9-0.9-2.3,0-3.3L34.7,15.9z"/>
        </svg>
    </div>
</header>
<main class="main">
  <div class="data-scroll">
    <div class="container" id="about-page">
      <div class="title-page"><h1><?= t('Giới thiệu')?></h1></div>
      <section class="banner-inner">
        <div class="bg-inner" style="background-image:url('<?=str_replace('public://','/sites/default/files/',$node->field_image['und'][0]['uri'])?>')"></div>
      </section>
      <div class="outer-nav">
        <div class="sub-nav ani-item">
          <ul>
            <li><a href="javascript:void(0);" data-name="about-1">NAFOCO</a></li>
            <li><a href="javascript:void(0);" data-name="about-2">Thông tin chung</a></li>
            <li><a href="javascript:void(0);" data-name="about-3">Bằng khen</a></li>
            <li><a href="javascript:void(0);" data-name="about-7">Năng lực</a></li>
            <li><a href="javascript:void(0);" data-name="about-9">Mong muốn của chúng tôi</a></li>
          </ul>
        </div>
      </div>
      <?php print $messages; ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <section class="message set-post" data-post="about-1">
        <div class="title-main grey text-ani-item"><h2>CÔNG TY CỔ PHẦN LÂM SẢN NAM ĐỊNH</h2></div>
        <div class="text-collapsible">
          <div class="wrap-pic">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="img-edit">
                  <img alt="NFC" title="NAFOCO" class="img-responsive img-fluid"  src="<?=str_replace('public://','/sites/default/files/',node_load(21)->field_image['und'][0]['uri'])?>">
                </div>
              </div>
              <div class="col-md-6 col-12">
                <?php print $node->body['und'][0]['value'];?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="value set-post" data-post="about-2">
        <div class="value-content grey ani-item">
          <div class="text-intro">
            <div class="title-main grey text-ani-item"><h2><?php print node_load(3)->title;?></h2></div>
            <?php print node_load(3)->body['und'][0]['value'];?>
          </div>
          <div class="pic-value ani-item">
            <div class="pic-img"><img src="<?=str_replace('public://','/sites/default/files/',node_load(3)->field_image['und'][0]['uri'])?>" alt="T test ( cost value)">
            </div>
          </div>
        </div>
      </section>
      <section class="commitment set-post" data-post="about-3">
        <div class="commitment-content grey ani-item">
          <div class="slide-certification slide-three ani-item">
            <?php $danh_sach_img=node_load(21)->field_anh_lien_quan['und'];?>
            <?php foreach ($danh_sach_img as $img):?>
              <div class="item-certification">
                <div class="pic-img"><img src="<?=str_replace('public://','/sites/default/files/',$img['uri'])?>" alt="ảnh đẹp"></div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      <section class="capacity set-post" data-post="about-7">
        <div class="title-main grey text-ani-item"><h2><?php print node_load(23)->title;?></h2></div>
        <div class="text-collapsible">
          <div class="text-intro grey ani-item">
            <?php print node_load(23)->body['und'][0]['value'];?>
          </div>
        </div>
      </section>
        <section class="capacity set-post" data-post="about-9">
        <div class="title-main grey text-ani-item"><h2><?php print node_load(171)->title;?></h2></div>
        <div class="text-collapsible">
          <div class="text-intro grey ani-item">
            <?php print node_load(171)->body['und'][0]['value'];?>
          </div>
        </div>
      </section>
    </div>
      <footer class="footer">
          <div class="left-footer">
              <a href="mailto:nafoco@nafoco.com.vn" class="subscribe">
                  <div class="icon-subscribe">
                      <svg
                              xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                          <path fill="currentColor" d="M20.003,21.801l-2.365-2.07l-6.762,5.797c0.246,0.228,0.578,0.37,0.944,0.37h16.368
c0.365,0,0.695-0.142,0.94-0.37l-6.758-5.797L20.003,21.801z"/>
                          <path fill="currentColor" d="M29.13,12.612c-0.246-0.229-0.576-0.37-0.944-0.37H11.819c-0.365,0-0.695,0.142-0.941,0.373l9.125,7.821
L29.13,12.612z"/>
                          <polygon fill="currentColor" points="10.444,13.441 10.444,24.786 17.043,19.177 "/>
                          <polygon fill="currentColor" points="22.962,19.177 29.562,24.786 29.562,13.437 "/>
                          <path fill="currentColor" d="M8.501,6.677c0.021-0.044,0.001-0.083-0.036-0.054
C8.077,6.933,6.349,8.464,6.15,8.414C5.992,8.372,6.54,6.947,6.802,6.505C6.811,6.493,6.8,6.479,6.786,6.494
C5.715,7.401,5,8.767,4.89,10.121C5.89,9.608,7.676,7.794,8.501,6.677z"/>
                          <path fill="currentColor" d="M6.895,9.482c0.024-0.059-0.06-0.006-0.076,0.005
c-0.927,0.726-2.013,1.481-2.939,2.207c-0.076,0.059-0.081-0.033-0.08-0.058c0.169-1.499,0.611-2.789,1.152-4.21
c0.008-0.025-0.026-0.037-0.06-0.011C4.494,7.754,3.426,9.28,3.133,10.222c-0.556,1.772-0.285,3.591-0.273,3.581
C3.67,12.841,6.758,9.705,6.895,9.482z"/>
                          <path fill="currentColor" d="M5.399,12.952c0.042-0.048-0.027-0.067-0.079-0.043
c-1.073,0.76-1.905,1.719-2.7,2.72c-0.574-1.126-0.574-3.931-0.452-4.946c-0.005-0.045,0-0.095-0.067-0.012
c-0.042,0.054-0.618,1.609-0.81,3.007c-0.264,1.901,0.413,3.845,0.882,4.627C2.398,17.784,4.52,13.89,5.399,12.952z"/>
                          <path fill="currentColor" d="M37.81,20.979c-0.657-1.364-2.065-4.183-2.417-4.709
c-0.038-0.06-0.093-0.06-0.079,0.018c0.016,0.078,1.573,7.344,1.612,7.468c0.053-0.058,3.702-3.522,2.848-7.797
c-0.006-0.03-0.041-0.103-0.07-0.053C39.641,17.56,38.277,20.592,37.81,20.979z"/>
                          <path fill="currentColor" d="M34.686,12.91c-0.055-0.024-0.121-0.005-0.077,0.043
c0.877,0.938,3,4.832,3.22,5.354c0.471-0.783,1.147-2.726,0.883-4.627c-0.193-1.398-0.767-2.952-0.808-3.007
c-0.068-0.083-0.066-0.033-0.068,0.012c0.119,1.014,0.119,3.82-0.452,4.946C36.59,14.629,35.759,13.669,34.686,12.91z"/>
                          <path fill="currentColor" d="M35.117,10.121c-0.112-1.353-0.825-2.72-1.897-3.626
c-0.016-0.015-0.025-0.001-0.018,0.01c0.263,0.443,0.813,1.867,0.652,1.909c-0.195,0.05-1.926-1.481-2.312-1.791
c-0.038-0.029-0.058,0.009-0.036,0.054C32.329,7.794,34.115,9.608,35.117,10.121z"/>
                          <path fill="currentColor" d="M36.126,11.694c-0.928-0.726-2.017-1.48-2.942-2.207
c-0.015-0.012-0.097-0.065-0.074-0.005c0.134,0.223,3.224,3.359,4.034,4.321c0.014,0.01,0.281-1.808-0.272-3.581
c-0.292-0.941-1.361-2.467-1.761-2.807c-0.03-0.026-0.065-0.014-0.058,0.011c0.543,1.421,0.981,2.712,1.15,4.21
C36.206,11.661,36.201,11.753,36.126,11.694z"/>
                          <path fill="currentColor" d="M9.341,31.476c0.152,0.005,0.303,0.001,0.47,0.001
c-0.041-0.053-0.068-0.093-0.1-0.13c-0.383-0.463-3.197-6.074-3.274-6.17c0.016,1.996,0.948,4.04,1.215,4.563
c0.036,0.071,0.053,0.211-0.045,0.16c-1.817-0.474-3.504-0.853-5.611-3.329c-0.023-0.027-0.016,0.066-0.018,0.066
c0.016,0.104,0.021,0.207,0.049,0.31c0.241,0.97,0.763,1.773,1.497,2.448C4.297,30.106,5.21,30.578,6.2,30.91
C7.218,31.254,8.271,31.418,9.341,31.476z"/>
                          <path fill="currentColor" d="M38.008,26.57c-2.104,2.477-3.789,2.855-5.613,3.33
c-0.097,0.051-0.079-0.089-0.043-0.16c0.268-0.524,1.202-2.568,1.215-4.563c-0.075,0.097-2.891,5.707-3.274,6.17
c-0.032,0.038-0.058,0.077-0.098,0.13c0.166,0,0.319,0.004,0.468-0.001c1.073-0.058,2.126-0.221,3.144-0.565
c0.989-0.333,1.898-0.805,2.672-1.515c0.734-0.676,1.258-1.478,1.499-2.448c0.025-0.103,0.035-0.206,0.05-0.31
C38.027,26.636,38.034,26.543,38.008,26.57z"/>
                          <path fill="currentColor" d="M39.364,21.897c-1.147,1.327-1.987,2.793-3.461,3.938
c-0.027-0.387-0.196-3.753-0.543-5.137c-0.006-0.031-0.03-0.045-0.035-0.002c-0.15,0.85-1.223,7.319-1.252,7.406
c0.218-0.051,3.962-1.311,5.34-6.205C39.421,21.87,39.389,21.869,39.364,21.897z"/>
                          <path fill="currentColor" d="M3.081,23.756c0.038-0.124,1.592-7.391,1.608-7.468
c0.014-0.078-0.037-0.078-0.078-0.018c-0.35,0.526-1.758,3.345-2.415,4.709c-0.469-0.387-1.829-3.419-1.894-5.072
c-0.027-0.05-0.063,0.023-0.069,0.053C-0.623,20.234,3.027,23.699,3.081,23.756z"/>
                          <path fill="currentColor" d="M34.811,31.583c-3.306,0.917-5.697,0.841-6.33,0.779
c-0.03,0.004-0.058,0.004-0.076,0.004c0.644-0.587,1.942-2.112,2.462-3.65c0.05-0.164-0.015-0.218-0.142-0.117
c-1.676,1.647-3.592,3.053-5.758,4.133c0.312,0.111,0.596,0.216,0.882,0.313c0.868,0.298,1.742,0.567,2.649,0.718
c1.599,0.264,3.126,0.086,4.543-0.73c0.542-0.313,1.77-1.404,1.788-1.42C34.848,31.595,34.848,31.569,34.811,31.583z"/>
                          <path fill="currentColor" d="M5.93,28.102c-0.026-0.088-1.101-6.556-1.249-7.406
c-0.009-0.043-0.03-0.029-0.038,0.002c-0.347,1.385-0.512,4.75-0.541,5.137c-1.476-1.146-2.315-2.611-3.463-3.938
c-0.025-0.027-0.055-0.027-0.046,0C1.969,26.791,5.713,28.051,5.93,28.102z"/>
                          <path fill="currentColor" d="M11.506,33.761c0.91-0.151,1.786-0.42,2.652-0.718
c0.283-0.097,0.569-0.202,0.88-0.313c-2.165-1.08-4.085-2.486-5.759-4.133c-0.125-0.101-0.191-0.047-0.14,0.117
c0.517,1.538,1.814,3.063,2.464,3.65c-0.022,0-0.05,0-0.079-0.004c-0.633,0.063-3.022,0.139-6.328-0.779
c-0.038-0.013-0.038,0.013-0.019,0.029c0.019,0.016,1.245,1.107,1.787,1.42C8.382,33.847,9.906,34.025,11.506,33.761z"/>
                      </svg>
                  </div>
                  <span><?=$news?></span>
              </a>
              <a class="hotline desktop" href="tel:0946884848">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                      <path fill="currentColor" d="M24.106,29.74c1.549,0,3.282-0.967,4.213-2.039c1.062-1.221,0.505-1.955,0.308-2.151l-3.563-3.559
c-0.272-0.271-0.634-0.422-1.02-0.422c-0.385,0-0.746,0.15-1.019,0.422l-0.128,0.127c-0.331,0.322-0.751,0.731-0.986,1.368
c-1.773-1.353-3.413-2.994-4.886-4.888c0.633-0.237,1.042-0.653,1.364-0.983l0.126-0.128c0.561-0.561,0.561-1.474,0-2.034
l-3.888-3.881c-0.599-0.598-1.452-0.521-2.281,0.21c-1.427,1.256-2.739,4.336-1.559,5.853c3.573,4.593,7.472,8.486,11.589,11.57
C22.88,29.58,23.477,29.74,24.106,29.74 M11.186,17.325h-0.002H11.186z"></path>
                  </svg>
                  <span>0946.884.848</span>
              </a>
              <a class="hotline desktop" href="tel:0912459882">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                      <path fill="currentColor" d="M24.106,29.74c1.549,0,3.282-0.967,4.213-2.039c1.062-1.221,0.505-1.955,0.308-2.151l-3.563-3.559
c-0.272-0.271-0.634-0.422-1.02-0.422c-0.385,0-0.746,0.15-1.019,0.422l-0.128,0.127c-0.331,0.322-0.751,0.731-0.986,1.368
c-1.773-1.353-3.413-2.994-4.886-4.888c0.633-0.237,1.042-0.653,1.364-0.983l0.126-0.128c0.561-0.561,0.561-1.474,0-2.034
l-3.888-3.881c-0.599-0.598-1.452-0.521-2.281,0.21c-1.427,1.256-2.739,4.336-1.559,5.853c3.573,4.593,7.472,8.486,11.589,11.57
C22.88,29.58,23.477,29.74,24.106,29.74 M11.186,17.325h-0.002H11.186z"></path>
                  </svg>
                  <span>0912.459.882</span>
              </a>

              <?php print render_block_content('block','3');?>
          </div>
          <div class="right-footer">
              <div class="copyright">2020
                  <strong>NFC - NAFOCO</strong>. All Rights Reserved.
                  <a href="https://minhhien.com.vn/" target="_blank">DEVELOPED BY MINHHIEN SOLUTIONS</a>
              </div>
          </div>
      </footer>
  </div>
</main>
<div class="mobile-option">
    <a class="call" href="tel:0912459882">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M27.1,22.8L27.1,22.8c0,0-3.1-1.7-4.4-2.7c-0.4-0.4-1.2-0.4-1.4-0.4c-0.7,0-1.1,0.5-1.1,0.5l0,0
c0,0-0.3,0.3-0.8,0.7c-0.6,0.5-1.3,0.5-1.9-0.2c-0.9-0.7-5.2-5.8-6.6-7.4c-0.3-0.4-0.5-0.7-0.5-1.1c0.1-0.7,0.9-1.2,1.2-1.5l0.1-0.1
c0.9-0.6,1-1.6,0.7-2.3c-0.3-0.4-2-4.1-2.2-4.5C9.8,3.5,9.5,3,8.6,3C8,3,5.4,4.1,5.4,4.1C4.5,4.7,3,5.8,3.1,8.1
c0.1,2.8,2.3,6.9,7,12.5c4.8,6.1,10.4,8.8,12.8,8.7c2-0.1,4-2.7,4.5-4C28,24.1,27.6,23.2,27.1,22.8z"/>
            <path fill="currentColor" d="M22.9,3.3c-2.5-0.4-4.8-0.3-7.1,0.3c-1.1,0.3-1.8,1.5-1.4,2.6l0,0c0.1,0.2,0.4,0.4,0.6,0.3
c2.5-0.9,5.2-1.1,8.1-0.5c6.1,1.4,10.7,6.6,11.3,12.8c0.8,8.7-6,16-14.5,16c-8,0-14.6-6.5-14.6-14.6c0-0.3,0-0.6,0-0.9l-0.6-0.6
c-0.7-0.7-1.9-0.3-2,0.7C2.6,22,3,24.7,4.4,27.5c2.8,5.7,8.5,9.7,14.9,9.8c10.7,0.2,19-8.8,17.7-19.4C36,10.5,30.2,4.6,22.9,3.3z"/>
        </svg>
    </a>
    <a class="showrrom-visitor" href="javascript:void(0)">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M34.2,20.8c-0.6-0.6-1.2-1-1.8-1.4c0,0,0,0,0-0.1c0-3.5,0-6.9,0-10.4c0-1.1-0.8-2-1.8-2.1c-0.7-0.1-1.4,0-2.1,0
c0,0.8,0,1.6,0,2.3c0,1.1-0.8,2-1.9,2.2c-0.4,0.1-0.8,0.1-1.2,0c-1.3,0-2.3-1-2.3-2.3c0-0.7,0-1.4,0-2c0-0.1,0-0.2,0-0.2
c-3.2,0-6.3,0-9.5,0c0,0.1,0,0.2,0,0.2c0,0.7,0,1.4,0,2.1c0,1.2-0.8,2.1-1.9,2.3c-0.4,0.1-0.8,0-1.1,0c-1.4,0-2.4-1-2.4-2.4
c0-0.7,0-1.3,0-2c0-0.1,0-0.2,0-0.2c-0.6,0-1.1,0-1.7,0c-1.3,0-2.2,0.9-2.2,2.3c0,6.8,0,13.7,0,20.5c0,1.3,0.9,2.2,2.2,2.2
c4.4,0,8.7,0,13.1,0c0.1,0,0.2,0,0.2,0c0,0,0-0.1,0-0.1c1.5,2.9,4.6,4.8,8,4.8h0c5,0,9.1-4.1,9.1-9.1C36.9,24.8,36,22.5,34.2,20.8z
M8.4,29c-1.1,0-1.7-0.7-1.7-1.7c0-4.2,0-8.4,0-12.7c0-0.1,0-0.2,0-0.2c7.8,0,15.6,0,23.4,0c0,1.4,0,2.7,0,4
c-0.7-0.2-1.4-0.3-2.2-0.3c-5,0-9.1,4.1-9.1,9.1c0,0.6,0.1,1.2,0.2,1.7C15.3,29,11.9,29,8.4,29z M27.8,34.2c-1.9,0-3.6-0.7-4.9-2.1
c-1.3-1.3-2-3.1-2-4.9c0-3.8,3.1-6.9,6.9-6.9h0c1.9,0,3.6,0.7,4.9,2.1c1.3,1.3,2,3.1,2,4.9C34.7,31.1,31.6,34.2,27.8,34.2z"/>
            <path fill="currentColor" d="M24.4,6.8c0-0.7,0-1.4,0-2.1c0-0.7,0.4-1,1.1-1c0.2,0,0.5,0,0.7,0c0.5,0,0.9,0.4,0.9,0.9c0,1.5,0,3,0,4.5
c0,0.5-0.4,0.9-1,1c-0.3,0-0.5,0-0.8,0c-0.6,0-1-0.4-1-1C24.4,8.2,24.4,7.5,24.4,6.8z"/>
            <path fill="currentColor" d="M12.2,6.8c0,0.7,0,1.4,0,2.1c0,0.7-0.4,1-1,1c-0.2,0-0.5,0-0.7,0c-0.5,0-1-0.4-1-0.9c0-1.5,0-3,0-4.5
c0-0.5,0.4-0.9,1-0.9c0.3,0,0.5,0,0.8,0c0.6,0,1,0.4,1,1C12.2,5.3,12.2,6,12.2,6.8z"/>
            <path fill="currentColor"
                  d="M18.3,20.5c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2C20.5,19.6,19.5,20.5,18.3,20.5z"/>
            <path fill="currentColor"
                  d="M11.8,27c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2C14,26.1,13,27,11.8,27z"/>
            <path fill="currentColor"
                  d="M11.8,20.5c-1.2,0-2.2-1-2.1-2.2c0-1.2,1-2.2,2.2-2.1c1.2,0,2.2,1,2.2,2.2C14,19.6,13,20.5,11.8,20.5z"/>
            <path fill="currentColor" d="M31.4,24c0.5,0.5,1,1,1.5,1.5c-2.1,2.1-4.1,4.1-6.2,6.2c-1.2-1.2-2.4-2.4-3.6-3.6c0.5-0.5,1-1,1.5-1.5
c0.7,0.7,1.3,1.4,2,2.1C28.3,27.2,29.9,25.6,31.4,24z"/>
        </svg>
        <span><?=$book?></span>
    </a>
    <a class="link-load" href="<?=$path_showroom?>" data-name="showroom-page">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M19.7,1C11.2,1,4.3,7.9,4.3,16.4c0,3.8,1.4,7.2,3.6,9.9l0,0l0,0c0.6,0.7,1.2,1.3,1.9,1.9l9.9,9.9l9.7-9.7
c3.5-2.8,5.7-7.1,5.7-11.9C35.1,7.9,28.2,1,19.7,1z M19.7,20.7c-3.7,0-6.7-3-6.7-6.7s3-6.7,6.7-6.7s6.7,3,6.7,6.7
S23.4,20.7,19.7,20.7z"/>
        </svg>
        <span>Showroom</span>
    </a>
    <a class="link-load" href="<?=$path_contact?>" data-name="contact-page">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M36.4,5.9L15,23.3L2.5,19.5L37.1,5.2l-8.1,30.6l-9.5-10.9L36.4,5.9z"/>
            <polygon fill="currentColor" points="15,23.3 15.1,34.1 19.6,24.9 "/>
            <polygon fill="currentColor" points="15.2,34 22.2,29.1 19.9,26.4 "/>
        </svg>
        <span><?=$contact?></span>
    </a>
</div>

<div class="all-pics"></div>
<div class="all-album"></div>
<div class="allvideo"></div>
<div class="overlay-dark"></div>
<div class="wheel"><span></span><span></span></div>
<div class="go-top">
  <svg viewBox="0 0 80 80">
    <path fill="currentColor" d="M54.9,49.8H25.3L40,24.1L54.9,49.8z M30.7,46.5h18.6l-9.4-16.1L30.7,46.5z"></path>
  </svg>
</div>
<div class="mask"></div>
<div class="httpserver class-hidden">http://v-italy.vn/</div>
<div class="httptemplate class-hidden">http://v-italy.vn/catalog/view/theme/</div>
<script type="text/javascript" src="../catalog/view/theme/default/js/animate.js"></script>
<script type="text/javascript" src="../catalog/view/theme/default/js/jquery.js"></script>
<script type="text/javascript" src="../catalog/view/theme/default/js/validate-v=1.0.1.js"></script>
<script src="../catalog/view/theme/default/js/app-ver=1.0.1.js"></script>   <!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7V7BBF"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
