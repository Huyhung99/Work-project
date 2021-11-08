<?php
/** 11/30/2019 6:36 AM**/
/** Admin **/
/** drupal-7.65 **/
//$arr_star = [];
//for($i = 1; $i<= rand(4,5); $i++)
//  $arr_star[] = '<i class="fa fa-star" aria-hidden="true"></i>';
?>
<div class="container">
  <div class="section-title text-center">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <h2 class="mt-30 mb-10 line-height-1"> <span class="text-theme-colored3">Khóa học</span></h2>
      </div>
    </div>
  </div>
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
