<div class="property-news-area pt-30 pb-30">
    <div class="container">
        <div class="section-title">
            <h2 class="title text-uppercase text-center"><?php print $view->get_title()?></h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $row):?>
                <div class="col-lg-4">
                   <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
        <div class="details-news text-center">
          <div class="text-center">
            <a href="<?php print check_plain(url('/taxonomy/term/206',array()))?>" class="back_hover_ccc link_xem_chi_tiet mt-0"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Xem Thêm</a>
          </div>
        </div>
    </div>
</div>
