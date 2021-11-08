<div class="property-news-area pd-top-60 pd-bottom-60">
    <div class="container">
        <div class="section-title">
            <h2 class="title text-uppercase">Tin tức</h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $row):?>
                <div class="col-lg-4">
                   <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
        <div class="details-news text-center">
            <a class="readmore-btn" href="/tin-tuc" tabindex="0">Xem thêm <i class="la la-arrow-right"></i></a>
        </div>
    </div>
</div>
