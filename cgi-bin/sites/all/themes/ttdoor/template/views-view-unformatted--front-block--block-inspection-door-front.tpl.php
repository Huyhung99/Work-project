
<div class="overflow-hidden">
    <div class="res-gallery__tabs">
        <h3 class="main-title text-uppercase">Cửa kiểm tra</h3>
        <a class="view-all" href="/san-pham/cua-kiem-tra"><span class="view-all-title">Xem tất cả </span><i class="fas fa-angle-double-right"></i></i></a>
    </div>
    <div class="res-gallery res-gallery--horizontal">
        <div class="tab-content res-gallery__content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-cat01" role="tabpanel"
                 aria-labelledby="v-pills-cat01-tab">
                <div class="row">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <?php print $row; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
