<?php
/**
 ** hungd
 ** 6/5/2020 6:51 AM
 ** views-view-unformatted--category-view--block.tpl.php
 ** drupal-7.65
 */
?>


<section class="ttm-row service-section clearfix">
    <div class="line-shape">
        <span class="line-one"></span>
        <span class="line-two"></span>
        <span class="line-three"></span>
        <span class="line-four"></span>
    </div>
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-7 col-md-7 col-sm-9 m-auto">
                <!-- section title -->
                <div class="section-title with-desc text-center clearfix">
                    <div class="title-header">
                        <h2 class="title">DỊCH VỤ</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row end -->
    </div>
</section>


<section class="ttm-row p-0 res-991-mt_80">
    <div class="container">
        <!-- row -->
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-md-3 col-6">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
        </div><!-- row end-->
    </div>
</section>
