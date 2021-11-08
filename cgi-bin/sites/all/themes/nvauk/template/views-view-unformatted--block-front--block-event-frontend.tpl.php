<?php
/**
 ** hungd
 ** 4/30/2020 2:41 PM
 ** views-view-unformatted--block-front--block-event-frontend.tpl.php
 ** drupal-7.65
 */
?>
<!-- Project Section -->
<section class="projects-section-three" id="projects">
  <div class="auto-container">
    <div class="upper-box">
      <div class="sec-title light">
        <h2><?php print t('HÌNH ẢNH') ?></h2>
      </div>
      <?php print l('<span class="btn-title">'.t('Xem hình ảnh').'</span>', 'events', array(
        'attributes' => array(
          'class' => array(
            'theme-btn btn-style-three',
            'view-all'
          )
        ),
        'html' => true
      )) ?>
    </div>

    <!-- Prject Carousel -->
    <div class="project-carousel-two owl-carousel owl-theme">
      <?php foreach ($rows as $id => $row): ?>
        <!-- Project Block -->
        <div class="project-block-three">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--End Project Section -->
