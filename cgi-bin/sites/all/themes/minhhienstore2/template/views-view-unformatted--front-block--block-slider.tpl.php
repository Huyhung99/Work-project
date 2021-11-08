<div class="hero-slider-wrapper mt-30">
  <!-- Hero Slider Start -->
  <div class="hero-slider-area hero-slider-one">
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <?php foreach ($rows as $id => $row): ?>
          <div class="swiper-slide">
            <?php
            $arr = explode('{}',$row);
            ?>
            <?=$arr[0]; ?>
            <div class="hero-content-one">
              <div class="slider-content-text">
                <?php if($arr[1] != ''): ?>
                  <h2><?=$arr[1]?></h2>
                <?php endif; ?>
                <?php if($arr[2] != ''): ?>
                  <div class="slider-btn">
                    <a href="<?=$arr[2]; ?>" title="<?=t('Xem chi tiết'); ?>">
                      <?=t('Xem chi tiết'); ?>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Add Arrows -->
      <!--<div class="swiper-button-next swiper-button-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>-->
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Hero Slider End -->
</div>
