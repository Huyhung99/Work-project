<?php
/**
 ** hungd
 ** 7/3/2020 11:01 AM
 ** views-view-unformatted--block-front--block-service-frontend.tpl.php
 ** drupal-7.65
 */
?>
  <section id="feature-property" class="feature-property">
    <div class="container-fluid ovh">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title mb30">
            <h1 class="text-left">DỊCH VỤ NHÀ ĐẤT AN PHÁT CUNG CẤP</h1>
          </div>
        </div>
        <div class="col-lg-12 ">
          <div class="feature_property_home3_slider">
            <?php foreach ($rows as $id => $row): ?>
              <div class="item">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
