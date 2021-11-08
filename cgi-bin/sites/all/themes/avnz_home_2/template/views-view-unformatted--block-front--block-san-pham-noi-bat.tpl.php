<?php
/**
 ** hungd
 ** 6/29/2020 11:44 AM
 ** views-view-unformatted--block-front--block-san-pham-noi-bat.tpl.php
 ** drupal-7.65
 */
?>
<!--Latest Product-->
<div class="container">
<section class="section-padding our-product">
  <div class="section-header-left title">
    <h1 id="title-front" class="header-title">AVNZ - Thiết bị & Vật liệu Xây dựng Nội - Ngoại thất</h1>
  </div>
  <div class=" tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-md-3 col-6">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
</div>
<!--End Latest Product-->
