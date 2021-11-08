<?php
/**
 ** hungd
 ** 6/6/2020 8:23 AM
 ** views-view-unformatted--block-front--block-san-pham-front.tpl.php
 ** drupal-7.65
 */
?>
<div class="section-full p-lr80 latest_project-outer square_shape3">

  <!-- TITLE START -->
  <div class="section-head text-left">
    <div class="row">
      <div class="col-md-4">
          <h2 class="text-uppercase font-30 text-green-dark"><i class="glyphicon glyphicon-unchecked text-green-dark"></i> <span class="text-yellow">DỰ ÁN</span> MỚI NHẤT</h2>
        <div class="wt-separator-outer text-green">
          <div class="wt-separator bg-black"></div>
      </div>
      </div>

    </div>
  </div>
  <!-- TITLE END -->

  <!-- IMAGE CAROUSEL START -->
  <div class="section-content">

    <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-left">
      <!-- COLUMNS 1 -->
        <?php foreach ($rows as $id => $row): ?>
      <div class="item fadingcol building-col">
        <div class="wt-img-effect ">

          <div class="item fadingcol  building-col">
            <div class="wt-img-effect ">
              <?php print $row; ?>
            </div>
          </div>


        </div>
      </div>
        <?php endforeach;?>
    </div>

  </div>

  <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right text-green-dark">
    <strong>THIÊN ÂN</strong>
    <span class="text-green-dark">Trân quý cái đẹp</span>
  </div>
</div>


