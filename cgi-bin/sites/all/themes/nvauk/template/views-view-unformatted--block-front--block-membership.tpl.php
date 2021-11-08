<?php
/**
 ** hungd
 ** 4/30/2020 7:05 PM
 ** views-view-unformatted--block-front--block-membership.tpl.php
 ** drupal-7.65
 */
?>

<!-- Products Section -->
<section class="products-section" id="shop">
  <div class="auto-container">
    <div class="sec-title">
      <h2><?php print t('Membership') ?></h2>
      <div class="text">The List type of Membership</div>
    </div>

    <div class="carousel-outer">
      <!-- Products Carousel -->
      <div class="products-carousel owl-carousel owl-theme">
        <!-- News block -->
        <?php foreach ($rows as $id => $row): ?>
          <div class="shop-item">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- Products Section End -->
