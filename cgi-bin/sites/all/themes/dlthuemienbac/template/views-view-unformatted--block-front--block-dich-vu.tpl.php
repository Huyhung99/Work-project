<?php
/**
 ** hungd
 ** 6/27/2020 8:47 AM
 ** views-view-unformatted--block-front--block-dich-vu.tpl.php
 ** drupal-7.65
 */
?>

<!-- welcome section -->
<section class="welcome-section sp-two grey-bg">
  <div class="container">
      <div class="sec-title centered">
          <div class="inner-title">
              <h1 >Dịch vụ trọn gói kế toán</h1>
          </div>
      </div>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="services-block-fifteen hvr-float-shadow col-lg-4 col-md-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
