<?php
/**
 ** hungd
 ** 6/24/2020 4:01 PM
 ** views-view-unformatted--block-front--block-service-frontend.tpl.php
 ** drupal-7.65
 */
?>
<!-- service area start -->
<div class="welcome-area welcome-area-4 area-padding">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="section-headline text-center">
      <h3>DỊCH VỤ CHÚNG TÔI CUNG CẤP</h3>
      <p>Với tiêu chí Chất lượng - Hiệu quả - Chuyên nghiệp, <strong>Bất động sản An Phát</strong> luôn cố gắng mang lại cho bạn những dịch vụ tốt nhất.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- single-well end-->
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-sm-6 col-xs-12">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- service-area end -->
