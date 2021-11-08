<?php
/**
 ** hungd
 ** 4/30/2020 1:13 PM
 ** views-view-unformatted--block-front--block-front.tpl.php
 ** drupal-7.65
 */
?>
<!-- Banner Section -->
<section class="banner-section">
  <div class="banner-carousel owl-carousel owl-theme">
    <?php foreach ($rows as $id => $row): ?>
      <?php $arr = explode('{{}}', $row); ?>
      <!-- Slide Item -->
      <div class="slide-item">
        <div class="image-layer" style="background-image:url('<?=trim($arr[0])?>')"></div>
        <div class="content-box">
          <div class="content">
            <div class="auto-container">
              <h2><?=trim($arr[1])?></h2>

            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!--END Banner Section -->

