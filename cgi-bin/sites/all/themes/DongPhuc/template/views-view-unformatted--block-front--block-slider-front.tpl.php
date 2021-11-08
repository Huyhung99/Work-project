<section class="banner-section">
    <div class="home-carousel owl-theme owl-carousel">
        <?php foreach ($rows as $row):?>
            <?php
            $arr = explode('{{}}',$row);
            $title = trim($arr[0]);
            $field_image = trim($arr[1]);
            $field_caption = trim($arr[2]);
            $field_link = trim($arr[3]);
            $field_mo_ta_slider = trim($arr[4]);
            ?>
            <div class="slide-item">
                <div class="image-layer" data-background="<?=$field_image?>"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h2><?=$title?></h2>
                                <p><?=$field_mo_ta_slider?></p>
                                <div class="btn-box">
                                    <a href="<?=$field_link?>" class="cs-btn-one btn-gradient-color">Liên hệ</a>
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
