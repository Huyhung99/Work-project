<?php
/**
 ** hungd
 ** 6/27/2020 10:13 AM
 ** views-view-unformatted--block-front--block-tin-tuc.tpl.php
 ** drupal-7.65
 */
?>
<!-- our team -->
<section class="team-section sp-two grey-bg">
  <div class="container">
    <!--Sec Title-->
    <div class="sec-title centered">
      <div class="inner-title">
        <h2 class="text-center">Tin tức</h2>
      </div>
    </div>

    <div class="row clearfix">
      <?php foreach ($rows as $id => $row): ?>
        <div class="team-block hvr-float-shadow col-md-4 col-sm-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

