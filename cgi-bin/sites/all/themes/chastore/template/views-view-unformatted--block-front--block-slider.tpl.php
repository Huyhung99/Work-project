<?php
?>
<div class="hero-slider-wrapper mt-30">
    <!-- Hero Slider Start -->
    <div class="hero-slider-area hero-slider-one">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
<!--                [field_image]{{}}[field_headline]{{}}[field_link]-->
                <?php foreach ($rows as $id => $row): ?>

                    <?php $arr = explode('{{}}',$row)?>
                    <div class="swiper-slide" style="background-image:url(<?=trim($arr[0])?>)">
                        <div class="hero-content-one">
                            <div class="slider-content-text">
                                <h2 class="text-uppercase"><?=$arr[1]?></h2>
                                <p ><?=trim($arr[3])?></p>
                                <div class="slider-btn">
                                    <a class="text-uppercase" href="<?=$arr[2]?>">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Add Arrows -->
<!--            <div class="swiper-button-next swiper-button-white"></div>-->
<!--    <div class="swiper-button-prev swiper-button-white"></div>-->
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <?php foreach ($rows as $id => $row): ?>
                    <?php $arr = explode('{{}}',$row)?>
                    <div class="swiper-slide">
                        <div class="slider-thum-text"><span><?=trim($arr[1])?></span></div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Hero Slider End -->
</div>
