<?php

    global $language;
    if ($language->language == 'vi'){
        $head_title = 'Khách hàng';
    }else{
        $head_title = 'Testimonials';
    }
?>

<div class="section-full p-t80 p-b80 bg-center bg-full-height bg-no-repeat bg-gray bg-testimonial">
    <div class="container">
        <div class="section-head text-center">
            <h2 data-title="<?=$head_title?>"><?=$head_title?></h2>
            <div class="mt-separator-outer">
                <div class="mt-separator bg-primary"></div>
            </div>
        </div>
        <div class="section-content">
            <div class="owl-carousel testimonial-five">
                <?php foreach ($rows as $row):?>
                    <?php $arr = explode('{{}}',$row);
                    $title = $arr[0];
                    $body = $arr[1];
                    ?>
                    <div class="item">
                        <div class="testimonial-5 bg-white">
                            <div class="testimonial-text clearfix">
                                <div class="testimonial-paragraph">
                                    <span class="fa fa-quote-left text-primary"></span>
                                    <p><?=$body?>
                                    </p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <strong class="testimonial-name"><?=$title?></strong>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>

    </div>
</div>
