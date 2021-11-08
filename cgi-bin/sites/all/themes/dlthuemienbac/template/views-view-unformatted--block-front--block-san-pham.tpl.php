<?php
/**
 ** hungd
 ** 6/27/2020 9:26 AM
 ** views-view-unformatted--block-front--block-san-pham.tpl.php
 ** drupal-7.65
 */
?>
<!-- services -->
<section class="services sp-two">
  <div class="container">
    <div class="sec-title centered">
        <div class="inner-title">
            <h2 class="text-center ">Sản phẩm</h2>
        </div>
    </div>
    <div class="row">
      <!-- services block  -->
      <?php foreach ($rows as $id => $row): ?>
        <div class="services-block-thirteen hvr-float-shadow col-lg-4 col-md-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
      <!-- end -->
    </div>
  </div>
</section>
