<?php
/**
 ** hungd
 ** 5/21/2020 8:46 PM
 ** views-view-unformatted--frontend-block--block-thuong-mai-dien-tu.tpl.php
 ** drupal-7.65
 */
?>
<!-- start team-section -->
<section class="team-section">
  <div class="container">
    <div class="row">
      <div class="col col-lg-6 col-lg-offset-3">
        <div class="section-title-s3">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-xs-12">
        <div class="team-grids">
          <?php foreach ($rows as $id => $row): ?>
            <div class="grid">
              <?php print $row; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end team-section -->


