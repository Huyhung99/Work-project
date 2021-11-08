<?php
/**
 ** hungd
 ** 7/3/2020 11:25 AM
 ** views-view-unformatted--block-front--block-san-pham.tpl.php
 ** drupal-7.65
 */
?>
<!-- Property Cities -->
<section id="property-city" class="property-city pt0 pb30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title">
          <h2 class="text-left pb30">BÁN NHÀ ĐẤT</h2>
        </div>
      </div>
    </div>

    <?php $i = 1; ?>
    <?php foreach ($rows as $id => $row): ?>
      <?php if($i %5 == 1) echo '<div class="row">'; ?>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl col-xxs-6">
        <?php print $row; ?>
      </div>
      <?php if($i % 5 == 0) echo '</div>'; $i++; ?>
    <?php endforeach; ?>
    <?php if($i % 5 != 0) echo '</div>'; ?>
  </div>
</section>

