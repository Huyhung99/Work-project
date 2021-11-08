<?php
/**
 ** hungd
 ** 4/30/2020 9:19 PM
 ** views-view-unformatted--block-front--block-doi-tac.tpl.php
 ** drupal-7.65
 */
?>
<!--Clients Section-->
<div class="clients-section style-two">
  <div class="auto-container">
    <!--Sponsors Carousel-->
    <ul class="sponsors-carousel owl-carousel owl-theme">
      <?php foreach ($rows as $id => $row): ?>
        <li class="slide-item">
            <?php print $row; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<!--End Clients Section-->
