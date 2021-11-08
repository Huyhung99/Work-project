<?php
/**
 ** hungd
 ** 5/21/2020 7:36 PM
 ** views-view-unformatted--frontend-block--block.tpl.php
 ** drupal-7.65
 */
?>
<!-- start of hero -->
<section class="hero-slider hero-style-2">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ($rows as $id => $row): ?>
        <?php $arr = explode('{{}}', $row); ?>
        <?php if($arr[0]!=''):  ?>
          <div class="swiper-slide">
            <div class="slide-inner slide-bg-image" data-background="<?=$arr[0]; ?>">
              <div class="container">
                <?php if(isset($arr[1])): ?>
                <div data-swiper-parallax="300" class="slide-title">
                  <h2><?=$arr[1]; ?></h2>
                </div>
                <?php endif; ?>
                  <div data-swiper-parallax="500" class="slide-btns">
                      <a href="https://crowd1.com/signup/yes-crowd1vn3" class="theme-btn-s2">Đăng kí</a>
                  </div>
                  <div data-swiper-parallax="500" class="slide-btns">
                      <a href="tin-tuc/ma-qr" class="theme-btn-s2">Mã QR</a>
                  </div>
              </div>
            </div> <!-- end slide-inner -->
          </div> <!-- end swiper-slide -->
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <!-- end swiper-wrapper -->

    <!-- swipper controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- end of hero slider -->

