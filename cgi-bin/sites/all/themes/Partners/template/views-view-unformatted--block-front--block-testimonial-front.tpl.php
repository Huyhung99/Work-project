<?php
    global $language;
    if ($language->language == 'en'){
        $title = 'CUSTOMER';
        $subtitle = 'TESTIMONIAL';
    }else if ($language->language == 'vi'){
        $title = 'KHÁCH HÀNG';
        $subtitle = 'ĐÁNH GIÁ';
    }
?>

<div class="testimonials-area bg-gray default-padding">
    <div class="container">
        <div class="testimonial-items">
            <div class="site-heading text-center">
                <h2><?=$subtitle?></h2>
            </div>
            <div class="row align-center">
                <div class="col-lg-12 testimonial-box">
                    <div class="testimonial-content testimonials-carousel owl-carousel owl-theme">
                        <?php foreach ($rows as $row):?>
                            <?php print $row?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
