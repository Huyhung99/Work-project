<!--[field_image]{{}}[field_image_1]{{}}[field_caption]{{}}[field_mo_ta_slider]{{}}[title]-->
<section class="banner-section style-five">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
                        <?php foreach ($rows as $id => $row): ?>
                        <?php $arr = explode('{{}}', $row) ;
                        $field_image = trim($arr[0]);
                        $field_image_1 = trim($arr[1]);
                        $field_caption = trim($arr[2]);
                        $field_mo_ta_slider = trim($arr[3]);
                        ?>
                            <div class="swiper-slide" style="background-image: url('<?=$field_image_1?>');">
                                            <div class="content-outer">
                                                <div class="content-box">
                                                    <div class="inner">
                                                        <h2><?=$arr[4]?></h2>
                                                        <div class="text"><?=$field_caption?><br> <?=$field_mo_ta_slider?> </div>
                                                        <div class="link-box">
                                                            <a href="tel:0936809468" class="theme-btn btn-style-one light"><span>LIÊN HỆ</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <?php endforeach; ?>
        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i></span></div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="far fa-angle-right"></i></span> </div>
    </div>
</section>

