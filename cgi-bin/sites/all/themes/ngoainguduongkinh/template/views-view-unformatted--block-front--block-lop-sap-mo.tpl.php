<?php
/** 11/29/2019 11:55 PM**/
/** Admin **/
/** drupal-7.65 **/
$arr_color = ['bg-theme-colored', 'bg-theme-colored2', 'bg-theme-colored3'];
?>
<div class="bxslider bx-nav-top" data-minslides="6" >
  <?php foreach ($rows as $id => $row): ?>
    <?php $index_color = rand(0,2); ?>
    <div class="event media mt-0 no-bg no-border">
      <?php print str_replace('bg-theme-colored', $arr_color[$index_color], $row); ?>
    </div>
  <?php endforeach; ?>
</div>
