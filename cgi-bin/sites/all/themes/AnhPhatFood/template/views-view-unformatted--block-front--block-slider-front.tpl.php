<section class="banner-section">
    <div class="home-carousel owl-theme owl-carousel">
        <?php foreach ($rows as $row):?>
            <?php
            $arr = explode('{{}}',$row);
            $title = trim($arr[0]);
            $field_image = trim($arr[1]);
            $field_caption = trim($arr[2]);
            $field_link = trim($arr[3]);
            ?>
            <div class="slide-item">
                <div class="image-layer" data-background="<?=$field_image?>"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h2><?=$title?></h2>
                                <p><?=$field_caption?></p>
                                <div class="btn-box">
                                    <a href="#" class="cs-btn-one btn-gradient-color">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>
<!--[title]{{}}[field_image]{{}}[field_caption]{{}}[field_link]-->
