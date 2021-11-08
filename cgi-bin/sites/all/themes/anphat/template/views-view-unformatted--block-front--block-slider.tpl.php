<?php
/**
 ** hungd
 ** 7/2/2020 10:49 PM
 ** views-view-unformatted--block-front--block-slider.tpl.php
 ** drupal-7.65
 */
?>
<!-- 10th Home Slider -->
<div class="home10-mainslider">
  <div class="container-fluid p0">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-banner-wrapper home10">
          <div class="banner-style-one owl-theme owl-carousel">
            <?php foreach ($rows as $id => $row): ?>
              <div class="slide slide-one">
                <?php print str_replace('{{}}', '<br />', $row); ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="carousel-btn-block banner-carousel-btn">
            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
            <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
          </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </div><!-- /.main-banner-wrapper -->
      </div>
    </div>
  </div>
</div>
