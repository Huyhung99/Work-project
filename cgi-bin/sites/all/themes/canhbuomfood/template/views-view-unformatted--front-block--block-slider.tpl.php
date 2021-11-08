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
            <a href="<?=$arr[2]?>" title="<?=$arr[1]?>">
                <?=$arr[0]; ?>
            </a>
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
