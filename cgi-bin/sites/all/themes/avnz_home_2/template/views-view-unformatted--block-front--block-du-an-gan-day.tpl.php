<?php
/**
 ** hungd
 ** 6/29/2020 1:41 PM
 ** views-view-unformatted--block-front--block-du-an-gan-day.tpl.php
 ** drupal-7.65
 */
?>
<!-- Hot Deals -->

<section class="ex-collection section-padding bg-theme-primary">
    <div class="container">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-header-left">
          <h3 class="text-light-black header-title title"> DỰ ÁN GẦN ĐÂY</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
          <?php $arr = explode('{{}}', $row) ; ?>
        <div class="col-lg-4">
            <a href="<?=trim($arr[2]); ?>"><div class="story-wrapper">
                    <?=trim($arr[1]); ?>
                    <div class="story-box-content story-content-wrapper">
                        <h5><a href="<?=trim($arr[2]); ?>"><?=trim($arr[0]); ?></a></h5>
                    </div>
                </div>
            </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
    </div>
</section>

<!--Hot deals End-->
