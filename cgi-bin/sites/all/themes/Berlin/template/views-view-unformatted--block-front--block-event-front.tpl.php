<!-- Courses Start -->
<div id="rs-courses-2" class="rs-courses-2 mt-20">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="mb-0"><?=$view->get_title();?></h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $row):?>
                <div class="col-lg-4 col-md-6">
                    <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
        <div class="rs-products ">
            <div class="view-btn">
                <a href="/chuyen-muc/su-kien-noi-bat">Xem thêm <i class="fas fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->
