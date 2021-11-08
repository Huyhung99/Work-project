<?php
/** 11/30/2019 2:09 PM**/
/** Admin **/
/** drupal-7.65 **/
?>
<!-- Section: blog -->
<h2 class="mt-0 mb-10 line-height-1 line-bottom-edu">Bài viết <span class="text-theme-colored3">mới nhất</span></h2>
<div class="row sm-text-center">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-sm-6 col-md-6">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
