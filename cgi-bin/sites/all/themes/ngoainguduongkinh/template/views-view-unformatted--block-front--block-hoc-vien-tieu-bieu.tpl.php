<?php
/** 11/30/2019 9:56 AM**/
/** Admin **/
/** drupal-7.65 **/
?>
<!-- Section:  -->
<section class="bg-silver-light">
  <div class="section-title text-center mb-0">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <h2 class="mt-30 mb-10 line-height-1">Học viên <span class="text-theme-colored3">tiêu biểu</span></h2>
        <p>Học viên từng tham gia các khóa học tại Trung tâm đạt được thành tích cao trong học tập</p>
      </div>
    </div>
  </div>

  <div class="container pb-sm-70">
    <div class="section-content text-center">
      <div class="row">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-sm-6 col-md-3 mb-sm-30">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
  </div>
</section>
