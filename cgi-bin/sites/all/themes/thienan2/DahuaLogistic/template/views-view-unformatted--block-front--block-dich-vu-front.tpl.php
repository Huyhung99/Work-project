<?php
?>
<div class="section-full  p-tb30 bg-full-height bg-secondry bg-repeat-x city-slide-image" style="background-image:url(/sites/all/themes/logistic/assets/images/background/bg-trans-1.png);">
    <div class="container-fluid">
        <div class="fillter-left-content">
            <div class="filter-left-part shake_image">
                <img src="/sites/default/files/truck-2.png" alt="Dahua Logistics" >
                <span class="tyre-position"><img src="/sites/default/files/rotate-tyer.png" alt="Dahua Logistics" class="spin-tyres"></span>
                <img class="blink-image" src="/sites/default/files/light-blink.png" alt="Dahua Logistics">
            </div>

            <div class="container">
                <div class="section-head text-center">
                    <div class="mt-box  text-white m-b30">
                        <h2 class="m-tb0"><span class="text-white"><?php print t('OUR SERVICES')?></span>
                        </h2>
                    </div>
                </div>

                <div class=" filter-carousal-1-outer">
                    <div class="filter-carousal-1">
                        <!-- IMAGE CAROUSEL START -->
                        <div class="section-content">
                            <div class="owl-carousel owl-carousel-filter  owl-btn-vertical-center fillter-nav-left">
                                <!-- Block 1 -->
<!--                                [title]{{}}[body]{{}}[path]{{}}[field_image]-->
                                <?php foreach ( $rows as $id => $row):?>
                                    <div class="item overflow-hide">
                                        <?php $arr =explode('{{}}',$row);
                                        $title = trim($arr[0]);
                                        $body = trim($arr[1]);
                                        $path = trim($arr[2]);
                                        $field_image = trim($arr[3]);
                                        ?>
                                        <div class="mt-box">
                                            <div class="mt-img-effect overlay-2">
                                                <?=$field_image?>
                                                <div class="overlay-2-bg bg-black"></div>
                                                <div class="overlay-2-content">
                                                    <div class="p-a30 p-b20 services-front">
                                                        <h4 class="m-t0 m-b15 text-primary"><?=$title?></h4>
                                                        <p class="m-b20 text-white"><?=$body?></p>
                                                        <a href="<?= $path?>" class="site-button"><?php print t('READ MORE')?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

