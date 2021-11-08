<?php
/**
 ** hungd
 ** 6/25/2020 3:29 PM
 ** views-view-unformatted--block-front--block-tin-tuc.tpl.php
 ** drupal-7.65
 */
?>

<!--Blog Area Start-->
<div class="blog-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h3>Tin mới nhất</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="blog-grid home-blog">
        <!-- Start single blog -->
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- End row -->
  </div>
</div>
<!--End of Blog Area-->
