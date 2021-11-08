<?php
/**
 ** hungd
 ** 6/29/2020 2:11 PM
 ** views-view-unformatted--block-front--block-tin-moi-nhat.tpl.php
 ** drupal-7.65
 */
?>

<section class="section-padding blog-section bg-theme-primary">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-header-left title">
          <h3 class="text-light-black header-title">Tin mới nhất</h3>
        </div>
      </div>
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
