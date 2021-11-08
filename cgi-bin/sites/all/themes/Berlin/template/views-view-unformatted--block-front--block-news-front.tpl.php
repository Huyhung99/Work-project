<!--[title]{{}}[field_image]{{}}[path]{{}}[body]{{}}[created]{{}}[body_1]-->
<div id="rs-latest-news" class="rs-latest-news mt-30 mb-40">
    <div class="container">
        <div class="sec-title mb-30 text-center">
            <h2 class="mb-0">Bài viết của chúng tôi</h2>
        </div>
        <!--        [title]{{}}[field_image]{{}}[path]{{}}[body]{{}}[created]-->
        <div class="row">
            <?php $i = 0; ?>
            <?php foreach ($rows as $row): ?>
                <?php $arr = explode('{{}}', $row);
                $title = trim($arr[0]);
                $image = trim($arr[1]);
                $path = trim($arr[2]);
                $body = trim($arr[3]);
                $created = trim($arr[4]);
                $body_1 = trim($arr[5]);
                ?>
                <?php if ($i == 0): ?>
                    <div class="col-md-6">
                        <div class="news-normal-block">
                            <div class="news-img">
                                <?php $path_image = image_style_url('960_x_550',$image)?>
                                <a href="<?= $path ?>" title="<?= $title ?>">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8Xw8AAoMBgDTD2qgAAAAASUVORK5CYII=" class="lozad" data-src="<?= $path_image ?>" alt="<?= $title ?>" title="<?= $title ?>"/>
                                </a>
                            </div>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span><?= $created ?></span>
                            </div>
                            <h4 class="news-title"><a href="<?= $path ?>"><?= $title ?></a></h4>
                            <div class="news-desc ">
                                <p class="line-clamp-3">
                                    <?= $body_1 ?>
                                </p>
                            </div>
<!--                            <div class="news-btn">-->
<!--                                <a href="--><?//= $path ?><!--">Xem thêm</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($i == 1):?>
                    <div class="col-md-6">
                        <div class="news-list-block">
                <?php endif;?>
                <?php if ($i>=1):?>
                    <div class="news-list-item">
                        <div class="news-img">
                            <?php $path_image_1 = image_style_url('800_x_600',$image)?>
                            <a href="<?=$path?>" title="<?=$title?>">

                                <img class="lozad" data-src="<?=$path_image_1?>" alt="<?=$title?>" title="<?=$title?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8Xw8AAoMBgDTD2qgAAAAASUVORK5CYII="/>
                            </a>
                        </div>
                        <div class="news-content">
                            <h5 class="news-title"><a href="<?=$path?>"><?=$title?></a>
                            </h5>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span><?=$created?></span>
                            </div>
                            <div class="news-desc line-clamp-2">
                                <p>
                                    <?php print $body?>
                                </p>
                            </div>
                        </div>
                    </div>
                            <?php endif;?>
                <?php $i++; ?>
            <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="rs-products mt-40">
            <div class="view-btn">
                <a href="/chuyen-muc/tin-tuc">Xem thêm <i class="fas fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Latest News End -->
