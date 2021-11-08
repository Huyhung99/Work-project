<?php
/** 11/12/2019 7:47 AM**/
/** Admin **/
/** drupal-7.65 **/
?>
<!-- lifestyle start-->
<div class="col-sm-16 wow fadeInUp animated " data-wow-delay="0.5s" data-wow-offset="100">
  <div class="main-title-outer pull-left">
    <div class="main-title">Liên kết</div>
  </div>
  <div class="row">
    <div id="owl-lifestyle" class="owl-carousel owl-theme lifestyle pull-left">
      <?php foreach ($rows as $id => $row): ?>
        <div class="item topic">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <hr>
</div>
<!-- lifestyle end -->

