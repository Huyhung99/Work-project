<?php
/**
 ** hungd
 ** 7/4/2020 4:10 PM
 ** views-view-unformatted--block-front--block-slider.tpl.php
 ** drupal-7.65
 */
?>

<section id="hero-9" class="hero-section">
  <div id="heroCarousel" class="carousel slide" data-ride="carousel">
    <!-- SLIDER CONTENT -->
    <div class="carousel-inner">
      <?php foreach ($rows as $id => $row): ?>
        <div id="carousel-slide-<?=$id?>" class="bg-fixed carousel-item <?=$id == 0 ? 'active' : ''?>">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>	<!-- END SLIDER CONTENT -->
    <!-- SLIDER NAVIGATION -->
    <div class="carousel-nav white-nav">
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
  </div>
</section>	<!-- END HERO-9 -->
