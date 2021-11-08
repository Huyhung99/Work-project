<?php
/**
 ** hungd
 ** 5/21/2020 10:37 PM
 ** views-view-unformatted--frontend-block--block-sharing.tpl.php
 ** drupal-7.65
 */
?>
<!-- start blog-pg-section -->
<section class="meta-blog-section">
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <div class="section-title-s2">
          <h2><?=t('TIN MỚI NHẤT'); ?> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-xs-12">
        <div class="blog-grids clearfix">
          <div class="row">
            <?php foreach ($rows as $id => $row): ?>
              <div class="col-md-4 col-sm-6 mar-b-30">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</section>
<!-- end blog-pg-section -->


