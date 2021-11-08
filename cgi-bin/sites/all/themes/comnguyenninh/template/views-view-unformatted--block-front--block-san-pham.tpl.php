<section class="ulockd-service-two bgi1">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
        <div class="ulockd-srvc-title">
          <h2 class="text-uppercase"><?php print t('Sản phẩm') ?></h2>
        </div>
      </div>
    </div>
    <div class="row ulockd-mrgn1260">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 clearfix">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
