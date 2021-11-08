<?php
/**
 ** hungd
 ** 6/23/2020 2:38 PM
 ** views-view-unformatted--block-front--block-slider.tpl.php
 ** drupal-7.65
 */
?>
<!-- Start Slider Area -->
<div class="intro-area intro-area-4 ">
  <div class="main-overly"></div>
  <div class="intro-carousel">
    <?php foreach ($rows as $id => $row): ?>
      <div class="intro-content">
        <?php print str_replace("{{}}", '<br/>', $row); ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- End Appointment Area -->
