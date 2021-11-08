<?php
/**
 ** hungd
 ** 6/25/2020 10:57 AM
 ** views-view-unformatted--block-front--block-san-pham.tpl.php
 ** drupal-7.65
 */
?>
<div class="services-area bg-color services-4 area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h3>Sản phẩm địa ốc</h3>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="all-services">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

