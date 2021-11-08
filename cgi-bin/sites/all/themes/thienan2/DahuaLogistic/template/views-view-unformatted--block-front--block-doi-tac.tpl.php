<?php
?>
<div class="section-full overlay-wraper p-t30 p-b30 bg-cover bg-white" data-stellar-background-ratio="0.5" style="background-image:url(/sites/default/files/ctools/bg3.jpg);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head text-center text-white">
            <h2 data-title="<?=t('Testimonials')?>"><?=t('Testimonials')?></h2>
            <div class="mt-separator-outer">
                <div class="mt-separator bg-white"></div>
            </div>
        </div>
        <!-- TITLE END -->
        <div class="section-content">
            <div class="owl-carousel home-carousel-1">
                <?php foreach ($rows as $id => $row): ?>
                    <div class="item">
                        <?php $arr = explode('{{}}',$row);
//                        [title]{{}}[field_image]{{}}[path]{{}}[body]
                        $title = trim($arr[0]);
                        $field_image = trim($arr[1]);
                        $path = trim($arr[2]);
                        $body = trim($arr[3]);
                        ?>
                        <div class="testimonial-2  clearfix bg-white">
                            <div class="testimonial-detail">
                                <div class="testimonial-pic shadow"><?=$field_image?></div>
                            </div>
                            <div class="testimonial-text">
                                <strong class="testimonial-name text-uppercase"><?=$title?></strong>
                                <span class="testimonial-position">Manager</span>
                                <span class="fa fa-quote-left"></span>
                                <p><?=$body?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

