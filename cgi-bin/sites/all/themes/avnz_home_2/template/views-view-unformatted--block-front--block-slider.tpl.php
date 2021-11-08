<?php
/**
 ** hungd
 ** 6/23/2020 2:38 PM
 ** views-view-unformatted--block-front--block-slider.tpl.php
 ** drupal-7.65
 */
?>

<!-- slider -->
<section class="about-us-slider swiper-container p-relative slider-banner-1">
  <div class="swiper-wrapper">
    <?php foreach ($rows as $id => $row): ?>
      <div class="swiper-slide slide-item">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</section>
<!-- slider -->
