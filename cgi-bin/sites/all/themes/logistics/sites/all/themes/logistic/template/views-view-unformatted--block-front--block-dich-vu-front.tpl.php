<div class=" filter-carousal-2-outer bg-gray p-b30">
    <div class="filter-carousal-2 p-a30">
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel owl-carousel-filter2  owl-btn-vertical-center fillter-nav-left">
                <?php foreach ($rows as $id => $row): ?>
                    <?php $arr = explode('{{}}', $row);
                    $title = trim($arr[0]);
                    $body = trim($arr[1]);
                    $path = trim($arr[2]);
                    $field_image = trim($arr[3]);
                    ?>

                    <div class="item fadingcol col-one overflow-hide">
                        <div class="mt-box">
                            <div class="mt-img-effect overlay-2">
                                <?= $field_image ?>
                                <div class="overlay-2-bg bg-black"></div>
                                <div class="overlay-2-content">
                                    <div class="text-white p-a30 p-b25">
                                        <h3 class="m-t0 m-b15"><?= $title ?></h3>
                                        <p><?= $body ?></p>
                                        <a href="<?= $path ?>" class="site-button">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
