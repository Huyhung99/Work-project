<?php
/** 11/30/2019 12:39 PM**/
/** Admin **/
/** drupal-7.65 **/
?>
<section>
  <div class="section-title text-center mb-0">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <h2 class="mt-30 mb-10 line-height-1">Hình ảnh <span class="text-theme-colored3">hoạt động của trung tâm</span></h2>
      </div>
    </div>
  </div>

  <div class="container pb-sm-70">
    <div class="section-content text-center">
      <!-- Portfolio Gallery Grid -->
      <div class="gallery-isotope default-animation-effect grid-5 masonry gutter-small clearfix" data-lightbox="gallery">
        <!-- grid sizer for Masonry -->
        <div class="gallery-item gallery-item-sizer"></div>
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
      </div>
      <!-- End Portfolio Gallery Grid -->
    </div>
  </div>
</section>
