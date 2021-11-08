<?php
/**
 ** hungd
 ** 6/29/2020 10:46 AM
 ** views-view-unformatted--view-taxonomy--block.tpl.php
 ** drupal-7.65
 */
?>
  <!-- Browse by category -->
  <section class="browse-cat bg-theme-primary section-padding">
    <div class="container-fluid custom-container">
      <div class="row">
        <div class="col-12">
          <div class="section-header-left title">
            <h3 class="text-light-black header-title">Sản phẩm </h3>
          </div>
        </div>
        <div class="col-12">
          <div class="category-slider swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($rows as $id => $row): ?>
                <div class="swiper-slide">
                  <?php print $row; ?>
                </div>
              <?php endforeach; ?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

      </div>
    </div>
  </section>
